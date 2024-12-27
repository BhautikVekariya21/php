<?php
session_start();
include('includes/db.php');

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// Process checkout and payment
if (isset($_POST['checkout'])) {
    $user_id = $_SESSION['user']['id'];
    $cart = $_SESSION['cart'];
    $total = 0;

    // Calculate total price
    foreach ($cart as $product_id => $quantity) {
        $query = "SELECT * FROM products WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $query);
        $product = mysqli_fetch_assoc($result);
        $total += $product['price'] * $quantity;
    }

    // Save order in the database
    $query = "INSERT INTO orders (user_id, total) VALUES ('$user_id', '$total')";
    if (mysqli_query($conn, $query)) {
        echo "Order placed successfully!";
        unset($_SESSION['cart']);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
