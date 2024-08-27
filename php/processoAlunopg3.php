<?php

    $nota_fiscal = $connect->real_escape_string($_POST['nota']);
    $pedido_compra = $connect->real_escape_string($_POST['pedido']);

    $sql = "INSERT INTO `pedidos`
    (`nota_fiscal`,`pedido_compra`) 
    VALUES 
    ('" . $nota_fiscal . "', '" . $pedido_compra . "')";
    

    $resultado = $connect->query($sql);

    $connect->close();
    header('location: ../paginas/pagina3Aluno.php', true, 301);
    exit();
