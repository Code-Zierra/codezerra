<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Include database configuration (use __DIR__ to ensure correct include path)
require_once __DIR__ . '/../config/db.php';

class ContactHandler {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    // Main handler function
    public function handleRequest() {
        // Read raw input once
        $rawInput = file_get_contents('php://input');

        // Try decode JSON first
        $input = json_decode($rawInput, true);

        // Fallbacks: accept form-encoded payloads or $_POST
        if (empty($input) || json_last_error() !== JSON_ERROR_NONE) {
            // If PHP populated $_POST (typical for form submissions), use it
            if (!empty($_POST)) {
                $input = $_POST;
                error_log("Using \\$_POST fallback: " . print_r($input, true));
            } else {
                // Try to parse form-encoded raw input (application/x-www-form-urlencoded)
                parse_str($rawInput, $parsed);
                if (!empty($parsed)) {
                    $input = $parsed;
                    error_log("Using parsed form-encoded fallback: " . print_r($input, true));
                }
            }
        }

        // Log the received data for debugging
        error_log("Received form data (final): " . print_r($input, true));

        if (!$input || !is_array($input)) {
            error_log("Invalid input received. Raw: " . $rawInput . " JSON error: " . json_last_error_msg());
            $this->sendResponse(false, 'Invalid request data received');
            return;
        }

        $action = $input['action'] ?? '';

        switch ($action) {
            case 'contact':
                $this->handleContactForm($input);
                break;
            case 'newsletter':
                $this->handleNewsletter($input);
                break;
            default:
                $this->sendResponse(false, 'Invalid action: ' . $action);
        }
    }

    // Handle contact form submission
    private function handleContactForm($data) {
        // Server-side validation
        $errors = $this->validateContactData($data);

        if (!empty($errors)) {
            error_log("Validation errors: " . print_r($errors, true));
            $this->sendResponse(false, 'Please fix the validation errors', $errors);
            return;
        }

        if (!$this->conn) {
            error_log("No database connection available");
            $this->sendResponse(false, 'Database connection failed');
            return;
        }

        try {
            // Prepare SQL statement
            $query = "INSERT INTO contacts 
                     (name, email, company, subject, service, message, consent, ip_address, user_agent) 
                     VALUES 
                     (:name, :email, :company, :subject, :service, :message, :consent, :ip_address, :user_agent)";

            $stmt = $this->conn->prepare($query);

            // Bind parameters with proper data types
            $stmt->bindValue(':name', $data['name'] ?? '');
            $stmt->bindValue(':email', $data['email'] ?? '');
            $stmt->bindValue(':company', $data['company'] ?? '');
            $stmt->bindValue(':subject', $data['subject'] ?? '');
            $stmt->bindValue(':service', $data['service'] ?? '');
            $stmt->bindValue(':message', $data['message'] ?? '');
            $stmt->bindValue(':consent', !empty($data['consent']) ? 1 : 0, PDO::PARAM_INT);
            $stmt->bindValue(':ip_address', $_SERVER['REMOTE_ADDR'] ?? '');
            $stmt->bindValue(':user_agent', $_SERVER['HTTP_USER_AGENT'] ?? '');

            // Log the SQL and parameters for debugging
            error_log("SQL: " . $query);
            error_log("Data: " . print_r([
                'name' => $data['name'],
                'email' => $data['email'],
                'company' => $data['company'],
                'subject' => $data['subject'],
                'service' => $data['service'],
                'message' => substr($data['message'], 0, 100) . '...',
                'consent' => !empty($data['consent']) ? 1 : 0
            ], true));

            // Execute query
            if ($stmt->execute()) {
                $lastId = $this->conn->lastInsertId();
                error_log("Insert successful, last insert ID: " . $lastId);
                
                // Verify the record was inserted
                $verifyStmt = $this->conn->prepare("SELECT * FROM contacts WHERE id = ?");
                $verifyStmt->execute([$lastId]);
                $record = $verifyStmt->fetch();
                
                if ($record) {
                    error_log("Record verified in database: " . print_r($record, true));
                    $this->sendResponse(true, 'Message sent successfully! We will get back to you soon.');
                } else {
                    error_log("Record not found after insert!");
                    $this->sendResponse(false, 'Message saved but verification failed.');
                }
            } else {
                $errorInfo = $stmt->errorInfo();
                error_log("Execute failed: " . print_r($errorInfo, true));
                $this->sendResponse(false, 'Failed to save message to database. Error: ' . $errorInfo[2]);
            }

        } catch (PDOException $exception) {
            error_log("Database exception: " . $exception->getMessage());
            $this->sendResponse(false, 'Database error occurred: ' . $exception->getMessage());
        } catch (Exception $e) {
            error_log("General exception: " . $e->getMessage());
            $this->sendResponse(false, 'An error occurred: ' . $e->getMessage());
        }
    }

    // Handle newsletter subscription
    private function handleNewsletter($data) {
        $email = $data['email'] ?? '';

        // Validate email
        if (!$this->validateEmail($email)) {
            $this->sendResponse(false, 'Please provide a valid email address.');
            return;
        }

        if (!$this->conn) {
            $this->sendResponse(false, 'Database connection failed');
            return;
        }

        try {
            // Check if email already exists
            $checkQuery = "SELECT id FROM newsletter_subscribers WHERE email = :email";
            $checkStmt = $this->conn->prepare($checkQuery);
            $checkStmt->bindValue(':email', $email);
            $checkStmt->execute();

            if ($checkStmt->rowCount() > 0) {
                $this->sendResponse(false, 'This email is already subscribed to our newsletter.');
                return;
            }

            // Insert new subscriber
            $query = "INSERT INTO newsletter_subscribers (email) VALUES (:email)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':email', $email);

            if ($stmt->execute()) {
                $this->sendResponse(true, 'Successfully subscribed to our newsletter!');
            } else {
                $errorInfo = $stmt->errorInfo();
                $this->sendResponse(false, 'Failed to subscribe to newsletter. Error: ' . $errorInfo[2]);
            }

        } catch (PDOException $exception) {
            error_log("Newsletter error: " . $exception->getMessage());
            $this->sendResponse(false, 'Database error occurred.');
        }
    }

    // Validate contact form data
    private function validateContactData($data) {
        $errors = [];

        // Required fields
        $required = ['name', 'email', 'subject', 'message'];
        foreach ($required as $field) {
            if (empty(trim($data[$field] ?? ''))) {
                $errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        // Email validation
        if (!empty($data['email']) && !$this->validateEmail($data['email'])) {
            $errors['email'] = 'Please provide a valid email address.';
        }

        // Length validations
        if (!empty($data['name']) && strlen($data['name']) > 100) {
            $errors['name'] = 'Name must be less than 100 characters.';
        }

        if (!empty($data['email']) && strlen($data['email']) > 100) {
            $errors['email'] = 'Email must be less than 100 characters.';
        }

        if (!empty($data['company']) && strlen($data['company']) > 100) {
            $errors['company'] = 'Company name must be less than 100 characters.';
        }

        if (!empty($data['subject']) && strlen($data['subject']) > 200) {
            $errors['subject'] = 'Subject must be less than 200 characters.';
        }

        if (!empty($data['message']) && strlen($data['message']) > 2000) {
            $errors['message'] = 'Message must be less than 2000 characters.';
        }

        // Consent validation
        if (empty($data['consent'])) {
            $errors['consent'] = 'You must agree to the privacy policy.';
        }

        return $errors;
    }

    // Email validation
    private function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Send JSON response
    private function sendResponse($success, $message, $errors = []) {
        http_response_code($success ? 200 : 400);
        echo json_encode([
            'success' => $success,
            'message' => $message,
            'errors' => $errors
        ]);
        exit;
    }
}

// Handle the request
try {
    $contactHandler = new ContactHandler();
    $contactHandler->handleRequest();
} catch (Exception $e) {
    error_log("Unhandled exception: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Internal server error: ' . $e->getMessage()
    ]);
}
?>