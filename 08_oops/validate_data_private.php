<?php
class Person {
    private $name;
    private $email;
    private $age;

    // Getter for $name
    public function getName() {
        return $this->name;
    }

    // Setter for $name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter for $email
    public function getEmail() {
        return $this->email;
    }

    // Setter for $email
    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email format.<br>";
        }
    }

    // Getter for $age
    public function getAge() {
        return $this->age;
    }

    // Setter for $age
    public function setAge($age) {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.<br>";
        }
    }
}

// Create an object of Person class
$person = new Person();

// Set properties using setters
$person->setName("Alice");
$person->setEmail("alice@example.com");
$person->setAge(30);

// Get properties using getters
echo "Name: " . $person->getName() . "<br>";  // Output: Name: Alice
echo "Email: " . $person->getEmail() . "<br>"; // Output: Email: alice@example.com
echo "Age: " . $person->getAge() . "<br>";     // Output: Age: 30

// Attempt to set invalid email
$person->setEmail("invalid-email");  // Output: Invalid email format.

// Attempt to set invalid age
$person->setAge(-5);  // Output: Age must be a positive number.
?>
