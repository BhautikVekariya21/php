<?php
// Description:
// This script demonstrates using prepared statements for secure database operations.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepared statement for INSERT
$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

$name = "Bob";
$email = "bob@example.com";
$stmt->execute();

echo "New record created successfully<br>";

$stmt->close();
$conn->close();
?>
