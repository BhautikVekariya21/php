<?php
// Description:
// This script demonstrates basic CRUD operations in PHP with a MySQL database.

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

// CREATE
$sql = "INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
}

// READ
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
}

// UPDATE
$sql = "UPDATE users SET email='alice.new@example.com' WHERE name='Alice'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
}

// DELETE
$sql = "DELETE FROM users WHERE name='Alice'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
}

$conn->close();
?>
