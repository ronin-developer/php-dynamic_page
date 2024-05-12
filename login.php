<?php
session_start();
require ("admin.php");


$username = $_POST['username'];
$password = $_POST['password'];

if ($admin['username'] === $username && $admin['password'] === $password) {
    $_SESSION['pet'] = "Milan";
}



header('Location: index.php')
    ?>