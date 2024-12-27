<?php
// products.php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

if (isset($_GET['add'])) {
    $product_id = $_GET['add'];
    addToCart($product_id);
    header("Location: cart.php");
    exit();
}

$products = getProducts();
?>

<div class="products">
    <h2>Our Products</h2>
    <div class="product-list">
        <?php while ($product = $products->fetch_assoc()): ?>
            <div class="product">
                <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h3><?php echo $product['name']; ?></h3>
                <p>$<?php echo $product['price']; ?></p>
                <a href="products.php?add=<?php echo $product['id']; ?>" class="btn">Add to Cart</a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
