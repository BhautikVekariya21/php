<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create an object
$rectangle = new Rectangle(10, 20);
echo $rectangle->calculateArea(); // Output: 200
?>
