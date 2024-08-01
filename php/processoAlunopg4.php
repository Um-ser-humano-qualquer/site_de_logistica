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
    $nome_produto = $connect->real_escape_string($_POST['nome_produto']);
    $qtd = $connect->real_escape_string($_POST['qtd']);
    $valor_unit = $connect->real_escape_string($_POST['valor_unit']);
    $valor_total = $connect->real_escape_string($_POST['valor_total']);



    if (isset($_POST['faltando'])) {
        $faltando = 1;
    } else {
        $faltando = 0;
    }

    if (isset($_POST['avariado'])) {
        $avariado = 1;
    } else {
        $avariado = 0;
    }


    $sql = "INSERT INTO `avaliacao_pedidos`
    (`produto`,`qtd`,`valor_unit`,`valor_total`,`faltando`,`avariado`,`turma_id`)
    VALUES
    ('" . $nome_produto . "','" . $qtd . "','" . $valor_unit . "','" . $valor_total . "', '" . $faltando . "', '" . $avariado . "','1')";

    $resultado = $connect->query($sql);

    $connect->close();
    header('location: ../paginas/pagina4Aluno.php', true, 301);
    exit();
}
