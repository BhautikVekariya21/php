<?php
// functions.php

// Fetch products from the database
function getProducts() {
    global $conn;

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    return $result;
}

// Fetch a single product by ID
function getProductById($id) {
    global $conn;

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Add product to cart session
function addToCart($product_id) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $product_id;
}

// Remove product from cart
function removeFromCart($product_id) {
    if (isset($_SESSION['cart'])) {
        $key = array_search($product_id, $_SESSION['cart']);
        if ($key !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }
}
?>
