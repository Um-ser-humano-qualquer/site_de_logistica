<?php

session_start();


$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "logistica";

$connect = new mysqli($hostname, $username, $password, $database);

if($connect->connect_errno){
    echo"Failed to connect to MySQL: ".$connect->connect_errno;
    exit();
}else{
    
    $pedido1 = $connect->real_escape_string($_POST['pedido1']);
    $pedido2 = $connect->real_escape_string($_POST["pedido2"]);    
    $pedido3 = $connect->real_escape_string($_POST["pedido2"]);
    $pedido4 = $connect->real_escape_string($_POST["pedido2"]);
    $pedido5 = $connect->real_escape_string($_POST["pedido2"]);
    
    $sql = "INSERT INTO ``
    (`pedido1`, `pedido2`, `pedido3`, `pedido4`, `pedido5`) as
    VALUES
    ('".$pedido1."', '".$pedido2."','".$pedido3."', '".$pedido4."', '".$pedido5."')";

}








