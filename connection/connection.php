<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "jlemm";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    echo $con->connect_error;
    return $con->connect_error;
} else {
    return $con;
}