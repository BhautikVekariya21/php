<?php
// Description:
// This script demonstrates the use of for loops in PHP.
// For loops are used when the number of iterations is known in advance.

echo "<h1>For Loop Examples</h1>";

// Example 1: Print numbers from 1 to 10
echo "<h2>Numbers from 1 to 10:</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

// Example 2: Display a multiplication table for a given number
$number = 5;
echo "<h2>Multiplication Table for $number:</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
}

// Example 3: Loop through an array using a for loop
$colors = ["Red", "Green", "Blue"];
echo "<h2>Colors in the Array:</h2>";
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}
?>
