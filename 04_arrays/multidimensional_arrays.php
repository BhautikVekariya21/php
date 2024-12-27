<?php
// Description:
// This script demonstrates the use of multidimensional arrays in PHP.
// Multidimensional arrays are arrays within arrays.

echo "<h1>Multidimensional Arrays in PHP</h1>";

// Example 1: Creating a 2D array
$students = [
    ["Name" => "Alice", "Age" => 25, "Grade" => "A"],
    ["Name" => "Bob", "Age" => 22, "Grade" => "B"],
    ["Name" => "Charlie", "Age" => 23, "Grade" => "A"]
];

// Accessing and displaying elements
echo "<h2>Student Details:</h2>";
foreach ($students as $student) {
    echo "Name: " . $student["Name"] . ", Age: " . $student["Age"] . ", Grade: " . $student["Grade"] . "<br>";
}

// Example 2: Adding a new student
$newStudent = ["Name" => "Diana", "Age" => 24, "Grade" => "B"];
$students[] = $newStudent;

echo "<h2>Updated Student List:</h2>";
foreach ($students as $student) {
    echo "Name: " . $student["Name"] . ", Age: " . $student["Age"] . ", Grade: " . $student["Grade"] . "<br>";
}

// Example 3: Nested loops for a 2D array
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "<h2>Matrix:</h2>";
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo "$value ";
    }
    echo "<br>";
}
?>
