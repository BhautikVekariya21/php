<?php
// Description:
// This script demonstrates common array operations in PHP.

echo "<h1>Array Operations in PHP</h1>";

// Example 1: Sorting an array
$numbers = [4, 2, 8, 6, 1];
echo "<h2>Original Array:</h2>";
print_r($numbers);

sort($numbers); // Sort in ascending order
echo "<h2>Sorted Array (Ascending):</h2>";
print_r($numbers);

rsort($numbers); // Sort in descending order
echo "<h2>Sorted Array (Descending):</h2>";
print_r($numbers);

// Example 2: Merging two arrays
$array1 = ["Red", "Green"];
$array2 = ["Blue", "Yellow"];
$mergedArray = array_merge($array1, $array2);
echo "<h2>Merged Array:</h2>";
print_r($mergedArray);

// Example 3: Filtering an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 === 0;
});
echo "<h2>Even Numbers:</h2>";
print_r($evenNumbers);
?>
