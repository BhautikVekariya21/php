<?php
class Person {
    // Private properties
    private $name;
    private $age;

    // Getter for $name
    public function getName() {
        return $this->name;
    }

    // Setter for $name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for $age
    public function getAge() {
        return $this->age;
    }

    // Setter for $age
    public function setAge($age) {
        if ($age < 0) {
            echo "Age cannot be negative.";
        } else {
            $this->age = $age;
        }
    }
}

// Create an object of the Person class
$person = new Person();

// Set properties using setters
$person->setName("John");
$person->setAge(25);

// Get properties using getters
echo "Name: " . $person->getName() . "<br>";  // Output: Name: John
echo "Age: " . $person->getAge();             // Output: Age: 25
?>
