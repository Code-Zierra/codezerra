<?php
header('Content-Type: text/html; charset=utf-8');

// Include database config (use __DIR__ to support running from CLI or web root)
require_once __DIR__ . '/../config/db.php';

echo "<h2>Database Connection Test</h2>";

try {
    $database = new Database();
    $conn = $database->getConnection();
    
    if ($conn) {
        echo "<p style='color: green;'>✓ Database connection successful!</p>";
        
        // Test table creation
        $result = $database->createTables();
        if ($result) {
            echo "<p style='color: green;'>✓ Tables created/verified successfully!</p>";
        } else {
            echo "<p style='color: red;'>✗ Table creation failed!</p>";
        }
        
        // Check if contacts table exists and has data
        $stmt = $conn->query("SELECT COUNT(*) as count FROM contacts");
        $result = $stmt->fetch();
        echo "<p>Contacts table record count: " . $result['count'] . "</p>";
        
        // Show table structure
        $stmt = $conn->query("DESCRIBE contacts");
        $columns = $stmt->fetchAll();
        
        echo "<h3>Contacts Table Structure:</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
        foreach ($columns as $column) {
            echo "<tr>";
            echo "<td>{$column['Field']}</td>";
            echo "<td>{$column['Type']}</td>";
            echo "<td>{$column['Null']}</td>";
            echo "<td>{$column['Key']}</td>";
            echo "<td>{$column['Default']}</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "<p style='color: red;'>✗ Database connection failed!</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
}

// Test form submission simulation
echo "<h3>Test Form Submission</h3>";
echo "<form method='post'>";
echo "<input type='hidden' name='test' value='1'>";
echo "<button type='submit'>Test Insert</button>";
echo "</form>";

if ($_POST['test'] ?? false) {
    testInsert();
}

function testInsert() {
    $database = new Database();
    $conn = $database->getConnection();
    
    try {
        $query = "INSERT INTO contacts (name, email, company, subject, service, message, consent, ip_address, user_agent) 
                 VALUES (:name, :email, :company, :subject, :service, :message, :consent, :ip_address, :user_agent)";
        
        $stmt = $conn->prepare($query);
        
        $testData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'company' => 'Test Company',
            'subject' => 'Test Subject',
            'service' => 'web-dev',
            'message' => 'This is a test message',
            'consent' => 1,
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Test Browser'
        ];
        
        if ($stmt->execute($testData)) {
            echo "<p style='color: green;'>✓ Test insert successful! Check your database.</p>";
        } else {
            echo "<p style='color: red;'>✗ Test insert failed!</p>";
        }
        
    } catch (Exception $e) {
        echo "<p style='color: red;'>Insert Error: " . $e->getMessage() . "</p>";
    }
}
?>