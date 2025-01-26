<?php
$host = 'mywebdb.cjeylnku7r41.us-east-1.rds.amazonaws.com';
$dbname = 'asset_management';
$username = 'admin'; // Default XAMPP MySQL username
$password = 'admin123';     // Default XAMPP MySQL password (empty)

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>