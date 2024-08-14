<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "logistica";

$connect = new mysqli($hostname, $user, $password, $database);
if ($connect->connect_error) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
    exit();
}
