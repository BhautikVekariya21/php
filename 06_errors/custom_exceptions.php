<?php
// Description:
// This script demonstrates how to define and use custom exceptions in PHP.

class CustomException extends Exception {
    public function errorMessage() {
        return "Error [{$this->getCode()}]: {$this->getMessage()}";
    }
}

try {
    echo "<h1>Custom Exceptions Example</h1>";
    $value = 0;
    if ($value == 0) {
        throw new CustomException("Value cannot be zero.", 1001);
    }
} catch (CustomException $e) {
    echo $e->errorMessage();
}
?>
