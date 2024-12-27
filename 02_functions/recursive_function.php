<?php
// Description:
// This script demonstrates recursive functions in PHP.
// A recursive function is one that calls itself to solve smaller instances of the same problem.

// A recursive function to calculate the factorial of a number
function factorial($n) {
    // Base case: factorial of 0 is 1
    if ($n === 0) {
        return 1;
    }

    // Recursive case: n * factorial of (n-1)
    return $n * factorial($n - 1);
}

// A recursive function to calculate the nth Fibonacci number
function fibonacci($n) {
    // Base cases
    if ($n === 0) return 0;
    if ($n === 1) return 1;

    // Recursive case
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Call the recursive functions and display the results
$number = 5;

$fact = factorial($number);
echo "<p>The factorial of $number is $fact.</p>";

$fib = fibonacci($number);
echo "<p>The $number-th Fibonacci number is $fib.</p>";
?>
