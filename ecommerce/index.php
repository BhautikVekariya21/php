<?php
// index.php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/functions.php';

$products = getProducts();
?>

<div class="products">
    <?php while ($product = $products->fetch_assoc()): ?>
        <div class="product">
            <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h3><?php echo $product['name']; ?></h3>
            <p>$<?php echo $product['price']; ?></p>
            <a href="cart.php?add=<?php echo $product['id']; ?>">Add to Cart</a>
        </div>
    <?php endwhile; ?>
</div>

<?php include 'includes/footer.php'; ?>
