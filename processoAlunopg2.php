<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sa_logistica";

$connect = new mysqli($hostname, $user, $password,$database);

if ($connect -> connect_errno) {
 echo "Failed to connect to MySQL: " . $connect -> connect_error;
 exit();
 } else {
 
   $placa_caminhao = $connect->real_escape_string($_POST['placa_caminhao']);

 $nome_motorista = $connect -> real_escape_string($_POST['nome_motorista']);
 $container = $connect -> real_escape_string($_POST['container']);
 $navio = $connect -> real_escape_string($_POST['navio']);
 $cliente = $connect -> real_escape_string($_POST['cliente']);
 $tipo = $connect -> real_escape_string($_POST['tipo']);
 $lacre = $connect -> real_escape_string($_POST['lacre']);
 $lacre_sif = $connect -> real_escape_string($_POST['lacreSIF']);
 $temperatura = $connect -> real_escape_string($_POST['temperatura']);
 $IMO = $connect -> real_escape_string($_POST['IMO']);
 $n_onu = $connect -> real_escape_string($_POST['n_onu']);

 
 $sql="INSERT INTO `aluno_conteiner`
 (`placa_caminhao`, `nome_motorista`, `container`, `navio`, `cliente`, `tipo`, `lacre`, `lacre_sif`, `temperatura`, `IMO`, `n_onu`)
 VALUES
 ('".$placa_caminhao."', '".$nome_motorista."', '".$container."', '".$navio."',  '".$cliente."', '".$tipo."', '".$lacre."', '".$lacre_sif."', '".$temperatura."', '".$IMO."', '".$n_onu."')";
 
 $resultado = $connect->query($sql);
 
 $connect -> close();
    header('location: pagina2Aluno.php', true, 301);                
 exit();
 }
?>