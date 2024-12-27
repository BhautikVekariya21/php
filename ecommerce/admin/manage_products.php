<?php
session_start();
include('includes/auth.php'); // Check if user is logged in as admin

// If not logged in, redirect to login page
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include('includes/db.php');

// Add a new product (Example)
if (isset($_POST['add_product'])) {
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $description = $_POST['product_description'];
    
    $query = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
    if (mysqli_query($conn, $query)) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="manage-products">
        <h1>Manage Products</h1>
        <form method="POST">
            <input type="text" name="product_name" placeholder="Product Name" required>
            <input type="number" name="product_price" placeholder="Price" required>
            <textarea name="product_description" placeholder="Description" required></textarea>
            <button type="submit" name="add_product">Add Product</button>
        </form>
    </div>
</body>
</html>
