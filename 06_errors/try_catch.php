<?php
// Description:
// This script demonstrates exception handling with try-catch blocks.

function divide($num1, $num2) {
    if ($num2 == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $num1 / $num2;
}

try {
    echo "<h1>Try-Catch Example</h1>";
    echo "Result: " . divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "<br>Execution completed.";
}
?>
