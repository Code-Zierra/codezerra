<?php
class Database {
    private $host = "localhost";
    private $db_name = "codezerra";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            // First try to connect without database to create it if needed
            $temp_conn = new PDO("mysql:host=" . $this->host, $this->username, $this->password);
            $temp_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Create database if it doesn't exist
            $temp_conn->exec("CREATE DATABASE IF NOT EXISTS `$this->db_name`");
            $temp_conn->exec("USE `$this->db_name`");
            
            // Now connect to the specific database
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
            
        } catch(PDOException $exception) {
            // If everything fails, try direct connection
            try {
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4",
                    $this->username,
                    $this->password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch(PDOException $e) {
                error_log("Database connection failed: " . $e->getMessage());
                return null;
            }
        }

        return $this->conn;
    }

    // Create tables if they don't exist
    public function createTables() {
        try {
            $conn = $this->getConnection();
            if (!$conn) {
                throw new Exception("No database connection");
            }
            
            // Contacts table
            $query = "CREATE TABLE IF NOT EXISTS contacts (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                company VARCHAR(100),
                subject VARCHAR(200) NOT NULL,
                service VARCHAR(50),
                message TEXT NOT NULL,
                consent TINYINT(1) DEFAULT 0,
                ip_address VARCHAR(45),
                user_agent TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

            $conn->exec($query);

            // Newsletter subscribers table
            $query = "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(100) NOT NULL UNIQUE,
                status ENUM('active', 'inactive') DEFAULT 'active',
                subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

            $conn->exec($query);

            return true;
        } catch(PDOException $exception) {
            error_log("Table creation error: " . $exception->getMessage());
            return false;
        } catch(Exception $e) {
            error_log("Table creation error: " . $e->getMessage());
            return false;
        }
    }
}

// Create database instance and tables
$database = new Database();
$database->createTables();
?>