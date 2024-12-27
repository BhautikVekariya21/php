<?php
class Animal {
    public function sound() {
        return "Animals make sounds.";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Dogs bark.";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Cats meow.";
    }
}

// Create objects
$dog = new Dog();
$cat = new Cat();

echo $dog->sound(); // Output: Dogs bark.
echo $cat->sound(); // Output: Cats meow.
?>
