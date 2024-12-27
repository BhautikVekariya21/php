<?php
// cart.php
session_start();
include 'includes/header.php';
include 'includes/db.php';

// Initialize cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add product to cart
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];
    $_SESSION['cart'][] = $product_id;
}

// Fetch products in cart
$cart_products = $_SESSION['cart'];
?>

<div class="cart">
    <h2>Your Cart</h2>
    <?php if (empty($cart_products)) { ?>
        <p>Your cart is empty.</p>
    <?php } else {
        $total = 0;
        foreach ($cart_products as $product_id) {
            $sql = "SELECT * FROM products WHERE id = $product_id";
            $result = $conn->query($sql);
            $product = $result->fetch_assoc();
            $total += $product['price'];
    ?>
            <div class="cart-item">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p>$<?php echo $product['price']; ?></p>
                <a href="cart.php?remove_from_cart=<?php echo $product['id']; ?>">Remove</a>
            </div>
    <?php }
    } ?>
    <p>Total: $<?php echo $total; ?></p>
    <a href="checkout.php">Proceed to Checkout</a>
</div>

<?php
// Remove product from cart
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];
    if (($key = array_search($product_id, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}

include 'includes/footer.php';
?>
