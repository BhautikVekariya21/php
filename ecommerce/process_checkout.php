<?php
// process_checkout.php
session_start();
include 'includes/db.php';
include 'includes/auth.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $total = 0;

    // Calculate the total price from cart items
    foreach ($_SESSION['cart'] as $product_id) {
        $sql = "SELECT price FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $total += $product['price'];
    }

    // Insert the order into the database
    $sql = "INSERT INTO orders (user_id, total, status) VALUES (?, ?, 'Pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("id", $user_id, $total);
    if ($stmt->execute()) {
        $order_id = $stmt->insert_id;

        // Insert each item in the order into the order_items table
        foreach ($_SESSION['cart'] as $product_id) {
            $sql = "SELECT price FROM products WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $product = $result->fetch_assoc();

            $price = $product['price'];
            $quantity = 1; // Assume quantity is 1 for simplicity, can be extended

            $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiii", $order_id, $product_id, $quantity, $price);
            $stmt->execute();
        }

        // Clear the cart after successful order
        unset($_SESSION['cart']);

        echo "<p>Order placed successfully! Your order ID is $order_id.</p>";
        echo "<a href='index.php'>Back to Shopping</a>";
    } else {
        echo "<p>Error placing order. Please try again.</p>";
    }
}
?>
