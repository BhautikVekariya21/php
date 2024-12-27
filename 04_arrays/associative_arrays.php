<?php
// Description:
// This script demonstrates the use of associative arrays in PHP.
// Associative arrays allow you to use named keys to access values.

echo "<h1>Associative Arrays in PHP</h1>";

// Example 1: Creating an associative array
$person = [
    "Name" => "Alice",
    "Age" => 25,
    "City" => "New York"
];

// Accessing and displaying values using keys
echo "<h2>Details of the Person:</h2>";
echo "Name: " . $person["Name"] . "<br>";
echo "Age: " . $person["Age"] . "<br>";
echo "City: " . $person["City"] . "<br>";

// Example 2: Adding new key-value pairs
$person["Country"] = "USA";
echo "<h2>Updated Details:</h2>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Example 3: Removing an element
unset($person["Age"]);
echo "<h2>After Removing Age:</h2>";
print_r($person);
?>
