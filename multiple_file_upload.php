<?php
// Description:
// This script demonstrates how to handle multiple file uploads in PHP.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/";
    foreach ($_FILES["files"]["name"] as $key => $name) {
        $uploadFile = $uploadDir . basename($name);
        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $uploadFile)) {
            echo "<h1>File Uploaded Successfully</h1>";
            echo "File Name: " . htmlspecialchars($name) . "<br>";
            echo "File Path: $uploadFile<br><br>";
        } else {
            echo "<h1>Error: Failed to Upload File - $name</h1><br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8
