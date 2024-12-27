<?php
session_start();
include('includes/auth.php'); // Include authentication to check if the user is an admin

// If the user is not logged in as an admin, redirect to login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-dashboard">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="stats">
            <div class="stat">
                <h3>Total Products</h3>
                <p>10</p> <!-- Fetch from DB -->
            </div>
            <div class="stat">
                <h3>Total Orders</h3>
                <p>5</p> <!-- Fetch from DB -->
            </div>
            <div class="stat">
                <h3>Total Users</h3>
                <p>50</p> <!-- Fetch from DB -->
            </div>
        </div>
        <a href="manage_products.php">Manage Products</a>
        <a href="manage_orders.php">Manage Orders</a>
    </div>
</body>
</html>
