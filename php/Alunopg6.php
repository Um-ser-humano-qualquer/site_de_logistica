<?php
include "conexao.php";

    $nome_produto = $_POST["nome_produto"];

    $sql = "SELECT * FROM `produtos`
        WHERE `nome_produto` ='".$nome_produto."';";
    $resultado = $connect->query($sql);

    if ($resultado->num_rows != 0) {
        $row = $resultado->fetch_assoc();
        
        
        
        
        exit();
    }
    