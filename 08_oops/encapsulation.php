<?php
class User {
    private $password;

    public function setPassword($password) {
        if (strlen($password) < 6) {
            echo "Password must be at least 6 characters.";
        } else {
            $this->password = $password;
        }
    }

    public function getPassword() {
        return str_repeat("*", strlen($this->password));
    }
}

$user = new User();
$user->setPassword("secret");
echo $user->getPassword(); // Output: ******
?>
