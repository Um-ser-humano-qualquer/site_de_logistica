<?php
include_once("conexao.php");
$id_pedido1 = $connect->real_escape_string($_POST["Pedido1"]);
$id_pedido2 = $connect->real_escape_string($_POST["Pedido2"]);
$id_pedido3 = $connect->real_escape_string($_POST["Pedido3"]);
$id_pedido4 = $connect->real_escape_string($_POST["Pedido4"]);

if ($id_pedido1 != 0){

    $id_pedido = array($id_pedido1);
    
    $sql = "INSERT INTO `guardar_id`(`id_guardado`) VALUES ('$id_pedido1')";
    
    $connect->close();

    header('location: ../paginas/Pagina13Aluno.php', true, 301);
    exit();

}elseif ($id_pedido2 != 0){
    
    $id_pedido = array($id_pedido2);
    
    $sql = "INSERT INTO `guardar_id`(`id_guardado`) VALUES ('$id_pedido2')";
    
    $connect->close();

    header('location: ../paginas/Pagina13Aluno.php', true, 301);
    exit();

}elseif ($id_pedido3 != 0){
    
    $id_pedido = array($id_pedido3);
    
    $sql = "INSERT INTO `guardar_id`(`id_guardado`) VALUES ('$id_pedido3')";
    
    $connect->close();

    header('location: ../paginas/Pagina13Aluno.php', true, 301);
    exit();

}elseif ($id_pedido4 != 0){
    
    $id_pedido = array($id_pedido4);
    
    $sql = "INSERT INTO `guardar_id`(`id_guardado`) VALUES ('$id_pedido4')";
    
    $connect->close();

    header('location: ../paginas/Pagina13Aluno.php', true, 301);
    exit();

}elseif ($id_pedido1 != 0 && $id_pedido2 = 0 && $id_pedido3 != 0 && $id_pedido4 != 0){
    
    $id_pedido = array($id_pedido1, $id_pedido3, $id_pedido4);
    
    $sql = "INSERT INTO `guardar_id`(`id_guardado`) VALUES ('$id_pedido1'), ('$id_pedido3'), ('$id_pedido4')";
    
    $connect->close();

    header('location: ../paginas/Pagina13Aluno.php', true, 301);
    exit();

}