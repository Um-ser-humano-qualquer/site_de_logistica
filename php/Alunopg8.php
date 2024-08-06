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
} else {
    $nome_produto = $connect->real_escape_string($_POST['Produtos']);

    $sql = "  SELECT * FROM `produtos` 
    WHERE nome_produto = '" . $nome_produto . "';";

    $resultado = $connect->query($sql);

    if ($resultado->num_rows != 0) {
         
    }else {
        
    }
}
