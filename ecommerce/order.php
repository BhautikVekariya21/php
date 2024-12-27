<?php
// order.php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['place_order'])) {
    $user_id = $_SESSION['user_id'];
    $cart = $_SESSION['cart'] ?? [];
    
    if (empty($cart)) {
        echo "<p>Your cart is empty. Please add products to the cart.</p>";
    } else {
        // Process order
        $order_total = 0;
        $order_items = [];

        foreach ($cart as $product_id) {
            $product = getProductById($product_id);
            $order_items[] = $product['name'];
            $order_total += $product['price'];
        }

        // Insert order into the database
        $sql = "INSERT INTO orders (user_id, total_price, status) VALUES (?, ?, 'pending')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("id", $user_id, $order_total);
        $stmt->execute();
        $order_id = $stmt->insert_id;

        // Add products to order_items table
        foreach ($order_items as $item) {
            $sql = "INSERT INTO order_items (order_id, product_name) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $order_id, $item);
            $stmt->execute();
        }

        // Clear the cart
        unset($_SESSION['cart']);

        echo "<p>Your order has been placed successfully. Your order ID is: $order_id</p>";
    }
} else {
    $cart = $_SESSION['cart'] ?? [];
    if (empty($cart)) {
        echo "<p>Your cart is empty. Please add products to the cart.</p>";
    } else {
        echo "<h2>Order Summary</h2>";
        echo "<ul>";
        $order_total = 0;
        foreach ($cart as $product_id) {
            $product = getProductById($product_id);
            echo "<li>" . $product['name'] . " - $" . $product['price'] . "</li>";
            $order_total += $product['price'];
        }
        echo "</ul>";
        echo "<p>Total: $" . $order_total . "</p>";
    }
}
?>

<form action="order.php" method="POST">
    <button type="submit" name="place_order" class="btn">Place Order</button>
</form>

<?php include 'includes/footer.php'; ?>
