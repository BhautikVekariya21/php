<?php
// Description:
// This script demonstrates the use of while loops in PHP.
// While loops are used when the number of iterations is not known in advance but depends on a condition.

echo "<h1>While Loop Examples</h1>";

// Example 1: Print numbers from 1 to 5
echo "<h2>Numbers from 1 to 5:</h2>";
$i = 1;
while ($i <= 5) {
    echo "$i ";
    $i++;
}

// Example 2: Sum of numbers until the sum exceeds 50
echo "<h2>Sum of Numbers Until It Exceeds 50:</h2>";
$sum = 0;
$i = 1;
while ($sum <= 50) {
    $sum += $i;
    echo "Adding $i, Total: $sum<br>";
    $i++;
}

// Example 3: Loop through an array using while
$fruits = ["Apple", "Banana", "Cherry"];
echo "<h2>Fruits in the Array:</h2>";
$i = 0;
while ($i < count($fruits)) {
    echo $fruits[$i] . "<br>";
    $i++;
}
?>
