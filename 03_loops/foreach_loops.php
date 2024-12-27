<?php
// Description:
// This script demonstrates the use of foreach loops in PHP.
// Foreach loops are specifically designed to iterate over arrays and objects.

echo "<h1>Foreach Loop Examples</h1>";

// Example 1: Loop through an array
$animals = ["Dog", "Cat", "Elephant"];
echo "<h2>Animals in the Array:</h2>";
foreach ($animals as $animal) {
    echo "$animal<br>";
}

// Example 2: Loop through an associative array
$person = ["Name" => "Alice", "Age" => 25, "City" => "New York"];
echo "<h2>Details of the Person:</h2>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Example 3: Modify array elements using foreach
$numbers = [1, 2, 3, 4, 5];
echo "<h2>Original Numbers:</h2>";
print_r($numbers);

echo "<h2>Numbers Doubled:</h2>";
foreach ($numbers as &$num) {
    $num *= 2; // Modify the value directly
}
unset($num); // Unset the reference to avoid issues
print_r($numbers);
?>
