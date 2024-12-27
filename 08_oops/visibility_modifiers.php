<?php
class BankAccount {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Create an object
$account = new BankAccount(100);
$account->deposit(50);
echo $account->getBalance(); // Output: 150
?>
