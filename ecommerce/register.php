<?php
// register.php
include 'includes/header.php';
include 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (register($username, $password, $email)) {
        header("Location: login.php");
        exit();
    } else {
        $error_message = "Error during registration. Please try again.";
    }
}
?>

<div class="register-form">
    <h2>Register</h2>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
    <form action="register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
</div>

<?php
include 'includes/footer.php';
?>
