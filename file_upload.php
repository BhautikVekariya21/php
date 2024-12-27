<?php
// Description:
// This script demonstrates how to handle a single file upload in PHP.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
        echo "<h1>File Uploaded Successfully</h1>";
        echo "File Name: " . htmlspecialchars(basename($_FILES["file"]["name"])) . "<br>";
        echo "File Path: $uploadFile<br>";
    } else {
        echo "<h1>Error: File Upload Failed</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="file">Choose File:</label>
        <input type="file" id="file" name="file" required><br><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
