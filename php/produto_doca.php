<?php
include_once("conexao.php");
$id_pedido = $connect->real_escape_string($_POST["Pedido1"]);
$id_pedido2 = $connect->real_escape_string($_POST["Pedido2"]);
$id_pedido3 = $connect->real_escape_string($_POST["Pedido3"]);
$id_pedido4 = $connect->real_escape_string($_POST["Pedido4"]);

$sql = "INSERT INTO `prod_doca` (`pedido_id`, `pedido_id2`,`pedido_id3`, `pedido_id4`) VALUES ('".$id_pedido."'), ('".$id_pedido2."'), ('".$id_pedido3."'), ('".$id_pedido4."')";

$resultado = $connect->query($sql);

$connect->close();
exit();