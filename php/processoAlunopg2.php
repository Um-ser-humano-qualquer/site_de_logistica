<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "logistica";

$connect = new mysqli($hostname, $user, $password, $database);

if ($connect->connect_errno) {
   echo "Failed to connect to MySQL: " . $connect->connect_error;
   exit();
} else {
   if(isset($cliente, $placa, $container, $transporte, $nome_motorista, $tipo, $lacre))

   $cliente = $connect->real_escape_string($_POST['cliente']);
   $placa = $connect->real_escape_string($_POST['placa']);
   $container = $connect->real_escape_string($_POST['container']);
   $transporte = $connect->real_escape_string($_POST['transporte']);
   $nome_motorista = $connect->real_escape_string($_POST['nome_motorista']);
   $tipo = $connect->real_escape_string($_POST['tipo']);
   $lacre = $connect->real_escape_string($_POST['lacre']);
   $lacreSif = $connect->real_escape_string($_POST['lacre SIF']);
   $NOnu = $connect->real_escape_string($_POST['NOnu']);
   $temperatura = $connect->real_escape_string($_POST['temperatura']);
   $IMO = $connect->real_escape_string($_POST['IMO']);

   $sql = "INSERT INTO `container`
      (`placa`, `nome_motorista`, `container`, `transporte`, `cliente`, `tipo`, `lacre`, `lacre Sif`, `NOnu`, `temperatura`, `IMO`, `turma_id`)
      VALUES
 ('" . $placa . "', '" . $nome_motorista . "', '" . $container . "', '" . $transporte . "',  '" . $cliente . "', '" . $tipo . "', '" . $lacre . "', 
 '" . $lacreSif . "', '" . $NOnu . "', '" . $temperatura . "', '" . $IMO . "', '1')";

   $resultado = $connect->query($sql);
   
   $connect->close();
   header('location: ../paginas/pagina2Aluno.php', true, 301);
   exit();
}
