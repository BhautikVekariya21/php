<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function display() {
        return "$this->name costs $this->price.";
    }
}

class Order {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price;
        }
        return $total;
    }
}

// Create products
$product1 = new Product("Laptop", 1000);
$product2 = new Product("Mouse", 50);

// Create an order
$order = new Order();
$order->addProduct($product1);
$order->addProduct($product2);

echo "Total Order Cost: " . $order->getTotal(); // Output: Total Order Cost: 1050
?>
