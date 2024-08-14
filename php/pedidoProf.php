<?php
include_once("conexao.php");

$id_pedido = $connect->real_escape_string($_POST["pedido"]);
$nome_produto = $connect->real_escape_string($_POST["nome_produto"]);
$un = $connect->real_escape_string($_POST["un"]);
$qtd = $connect->real_escape_string($_POST["qtd"]);
$valor_unit = $connect->real_escape_string($_POST["valor_unit"]);
$valor_total = $connect->real_escape_string($_POST["valor_total"]);
$msg = $connect->real_escape_string($_POST["msg"]);

$sql = "INSERT INTO `pedido_compra`
(`id_pedido`, `nome_produto`, `un`, `qtd`, `valor_unit`, `valor_total`, `msg`)
 VALUES ('" . $id_pedido . "','" . $nome_produto . "','" . $un . "','" . $qtd . "','" . $valor_unit . "','" . $valor_total . "','" . $msg . "')";


$resultado = $connect->query($sql);

$connect->close();
header('location: ../paginas/pagina5Prof.php', true, 301);
exit();
