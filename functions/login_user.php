<?php
session_start();

include '../connection/connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$res = $con->query("SELECT * FROM users WHERE email = '$email' AND password = md5('$password')") or die($con->error);
$row = $res->fetch_assoc();

if ($row) {
    header('location: ../home.php');
    $_SESSION['msg'] = null;
} else {
    header('location: ../login.php');
    $_SESSION['msg'] = 'Invalid credentials.';
}
