<?php
// checkout.php
session_start();
include 'includes/header.php';
include 'includes/db.php';

if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty. <a href='index.php'>Shop now</a></p>";
    exit;
}

$total = 0;
$cart_products = $_SESSION['cart'];
foreach ($cart_products as $product_id) {
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
    $total += $product['price'];
}
?>

<div class="checkout">
    <h2>Checkout</h2>
    <p>Total: $<?php echo $total; ?></p>
    <form action="process_checkout.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Shipping Address:</label>
        <textarea id="address" name="address" required></textarea>

        <button type="submit">Place Order</button>
    </form>
</div>

<?php
include 'includes/footer.php';
?>
