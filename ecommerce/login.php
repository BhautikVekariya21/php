<?php
// login.php
include 'includes/header.php';
include 'includes/auth.php';

function login($username, $password) {
    // Replace with actual authentication logic
    if ($username === 'admin' && $password === 'password') {
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<div class="login-form">
    <h2>Login</h2>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

<?php
include 'includes/footer.php';
?>
