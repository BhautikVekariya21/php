<?php
// Description:
// This script shows how return statements work in PHP functions.
// Return statements allow a function to pass a value back to the calling code.

// A function that calculates the square of a number
function calculateSquare($number) {
    return $number * $number; // Return the square of the number
}

// A function that checks if a number is even or odd
function isEven($number) {
    return $number % 2 === 0; // Return true if even, false otherwise
}

// Call the functions and use their return values
$number = 4;

$square = calculateSquare($number);
echo "<p>The square of $number is $square.</p>";

$isEven = isEven($number);
echo "<p>$number is " . ($isEven ? "even" : "odd") . ".</p>";
?>
