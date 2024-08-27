<?php
include_once("conexao.php");
    $id_pedido = $connect->real_escape_string($_POST["prod1"]);

    $sql = "INSERT INTO `prod_doca`
        (`id_prod1`)
        VALUES 
        ('" . $id_prod1  ")" ;")"