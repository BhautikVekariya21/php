<?php
// Description:
// This script illustrates the main data types in PHP with examples and usage.

echo "<h1>Data Types in PHP</h1>";

// String
$name = "Alice";
echo "<p>String: My name is $name</p>";

// Integer
$age = 30;
echo "<p>Integer: I am $age years old</p>";

// Float
$height = 5.7;
echo "<p>Float: My height is $height ft</p>";

// Boolean
$isPHPFun = true;
echo "<p>Boolean: Is learning PHP fun? " . ($isPHPFun ? "Yes" : "No") . "</p>";

// Array
$colors = ["Red", "Green", "Blue"];
echo "<p>Array: My favorite colors are " . implode(", ", $colors) . "</p>";

// Object
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayInfo() {
        return "This is a $this->color $this->brand.";
    }
}

$car = new Car("Toyota", "Red");
echo "<p>Object: " . $car->displayInfo() . "</p>";

// NULL
$unknown = null;
echo "<p>NULL: The value of the variable is " . var_export($unknown, true) . "</p>";
?>
