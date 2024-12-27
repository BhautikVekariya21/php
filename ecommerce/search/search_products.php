<?php
include('includes/db.php');

// Get search term from the form
$search_term = $_POST['search_term'] ?? '';

// Fetch products based on search term
$query = "SELECT * FROM products WHERE name LIKE '%$search_term%'";
$result = mysqli_query($conn, $query);
?>

<form method="POST" action="search_products.php">
    <input type="text" name="search_term" placeholder="Search for products" value="<?php echo $search_term; ?>">
    <button type="submit">Search</button>
</form>

<?php while ($product = mysqli_fetch_assoc($result)) { ?>
    <div class="product">
        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h3><?php echo $product['name']; ?></h3>
        <p><?php echo $product['price']; ?> USD</p>
        <a href="product_details.php?id=<?php echo $product['product_id']; ?>">View Details</a>
    </div>
<?php } ?>
