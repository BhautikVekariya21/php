<?php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to a file: $message";
    }
}

class DatabaseLogger implements Logger {
    public function log($message) {
        echo "Logging to a database: $message";
    }
}

// Use the classes
$fileLogger = new FileLogger();
$fileLogger->log("File log message."); // Output: Logging to a file: File log message.

$dbLogger = new DatabaseLogger();
$dbLogger->log("Database log message."); // Output: Logging to a database: Database log message.
?>
