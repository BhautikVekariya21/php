<?php
class BankAccount {
    private $balance;

    // Constructor to initialize balance
    public function __construct($initialBalance = 0) {
        $this->setBalance($initialBalance);  // Set initial balance if provided
    }

    // Getter for $balance
    public function getBalance() {
        return $this->balance;
    }

    // Setter for $balance
    public function setBalance($amount) {
        if ($amount < 0) {
            echo "Balance cannot be negative.<br>";
        } else {
            $this->balance = $amount;
        }
    }
}

// Create an object of BankAccount class with initial balance of 0
$account = new BankAccount();

// Set balance using setter
$account->setBalance(1000);
echo "Balance: " . $account->getBalance() . "<br>";  // Output: Balance: 1000

// Attempt to set an invalid balance
$account->setBalance(-500);  // Output: Balance cannot be negative.
?>
