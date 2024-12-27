
<?php
// Description:
// This script demonstrates PHP error handling, including setting a custom error handler.

function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script...<br>";
    die();
}

// Set custom error handler
set_error_handler("customError");

// Trigger an error
echo "<h1>Error Handling Example</h1>";
echo 10 / 0; // This will trigger an error
?>
