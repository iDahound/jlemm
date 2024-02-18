<?php
session_start();

include '../connection/connection.php';

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$res = $con->query("INSERT INTO users (`name`, `email`, `password`) VALUES ('$username', '$email', md5('$password'))") or die($con->error);

header('location: ../home.php');
$_SESSION['msg'] = null;
