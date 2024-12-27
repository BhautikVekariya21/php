<?php
// Description:
// This script defines and uses basic functions in PHP.
// Functions allow us to encapsulate reusable blocks of code.

// A simple function that prints a greeting
function greet() {
    echo "<h1>Hello, Welcome to PHP Functions!</h1>";
}

// A function that accepts a parameter
function personalizedGreeting($name) {
    echo "<p>Hello, $name! Glad to have you here.</p>";
}

// A function that adds two numbers and returns the result
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// Call the functions
greet();
personalizedGreeting("Alice");

$result = addNumbers(10, 20);
echo "<p>The sum of 10 and 20 is $result.</p>";
?>
