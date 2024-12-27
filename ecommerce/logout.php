<?php
// logout.php
session_start();
include 'includes/auth.php';

logout();
header("Location: index.php");
exit();
?>
