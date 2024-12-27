<?php
// Define a class
class Car {
    // Properties
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function startEngine() {
        return "The engine of the $this->color $this->brand is starting.";
    }
}

// Create an object
$car1 = new Car("Toyota", "Red");
echo $car1->startEngine(); // Output: The engine of the Red Toyota is starting.
?>
