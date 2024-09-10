<?php
include_once("conexao.php");
$id_pedido = $connect->real_escape_string($_POST["Pedido1"]);
$id_pedido2 = $connect->real_escape_string($_POST["Pedido2"]);
$id_pedido3 = $connect->real_escape_string($_POST["Pedido3"]);
$id_pedido4 = $connect->real_escape_string($_POST["Pedido4"]);

    $sql = "INSERT INTO `prod_doca`
        (`id_prod1`)
        VALUES 
        ('" . $id_prod1 . "')";
