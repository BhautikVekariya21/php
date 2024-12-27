<?php
// Description:
// This script accepts user input from an HTML form and displays it.
// It also sanitizes the input to prevent security vulnerabilities like XSS attacks.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']); // Sanitize user input
    echo "<h1>Hello, $name!</h1>";
} else {
    echo "<h1>Please enter your name below:</h1>";
}
?>

<!-- HTML Form for User Input -->
<form method="POST" action="">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Submit</button>
</form>
