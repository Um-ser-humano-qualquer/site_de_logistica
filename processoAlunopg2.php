<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "root";
$database = "sa_logistica";

$connnect = new mysqli($hostname, $user, $password,$database);

if ($connnect -> connect_errno) {
 echo "Failed to connect to MySQL: " . $connnect -> connect_error;
 exit();
 } else {
 // Evita caracteres especiais (SQL Inject)
 $placa_caminhao = $connnect -> real_escape_string($_POST['Placa do caminhão']);
 $nome_motorista = $connnect -> real_escape_string($_POST['Nome do motorista']);
 $container = $connnect -> real_escape_string($_POST['Container']);
 $navio = $connnect -> real_escape_string($_POST['Navio']);
 $cliente = $connnect -> real_escape_string($_POST['Cliente']);
 $tipo = $connnect -> real_escape_string($_POST['Tipo']);
 $lacre = $connnect -> real_escape_string($_POST['Lacre']);
 $lacre_sif = $connnect -> real_escape_string($_POST['LacreSIF']);
 $temperatura = $connnect -> real_escape_string($_POST['Temperatura']);
 $IMO = $connnect -> real_escape_string($_POST['IMO']);
 $n_onu = $connnect -> real_escape_string($_POST['N°ONU']);

 
 $sql="INSERT INTO `conteiner`
 (`placa_caminhao`, `nome_motorista`, `container`, `navio`, `cliente`, `tipo`, `lacre`, `lacre_sif`, `temperatura`, `IMO`, `n_onu`)
 VALUES
 ('".$placa_caminhao."', '".$nome_motorista."', '".$container."', '".$navio."', '".$tipo."', '".$lacre."', '".$lacre_sif."', '".$temperatura."', '".$IMO."', '".$n_onu."')";
 
 $resultado = $connnect->query($sql);
 
 $connnect -> close();
    header('location: pagina2Aluno.php', true, 301);                
 exit();
 }
?>