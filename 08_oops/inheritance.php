<?php
class Vehicle {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function describe() {
        return "This is a $this->type.";
    }
}

// Inheritance
class Bike extends Vehicle {
    public $brand;

    public function __construct($type, $brand) {
        parent::__construct($type);
        $this->brand = $brand;
    }

    public function describe() {
        return parent::describe() . " It's a $this->brand bike.";
    }
}

// Create an object
$bike = new Bike("two-wheeler", "Yamaha");
echo $bike->describe(); // Output: This is a two-wheeler. It's a Yamaha bike.
?>
