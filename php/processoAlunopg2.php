<?php
include_once("conexao.php");

$cliente = $connect->real_escape_string($_POST['cliente']);
$placa = $connect->real_escape_string($_POST['placa']);
$carga = $connect->real_escape_string($_POST['carga']);
$transporte = $connect->real_escape_string($_POST['transporte']);
$nome_motorista = $connect->real_escape_string($_POST['nome_motorista']);
$tipo = $connect->real_escape_string($_POST['tipo']);
$lacre = $connect->real_escape_string($_POST['lacre']);
$lacreSif = $connect->real_escape_string($_POST['lacreSif']);
$NOnu = $connect->real_escape_string($_POST['NOnu']);
$temperatura = $connect->real_escape_string($_POST['temperatura']);
$IMO = $connect->real_escape_string($_POST['IMO']);

$sql1 = "INSERT INTO `transporte`
      (`placa`, `nome_motorista`, `carga`, `transporte`, `cliente`, `tipo`, `lacre`, `lacre SIF`,
       `NOnu`, `temperatura`, `IMO`, `turma_id`)
      VALUES
 ('" . $placa . "', '" . $nome_motorista . "', '" . $carga . "', '" . $transporte . "',  '" . $cliente . "',
  '" . $tipo . "', '" . $lacre . "', '" . $lacreSif . "', '" . $NOnu . "', '" . $temperatura . "', '" . $IMO . "', '1')";

$checkboxes = $_POST['sem_lona, container_desgastado, avaria_lateral_direita, avaria_lateral_esquerda, avaria_teto,
    avaria_frente, sem_lacre, adesivos_avariados, 	excesso_altura, excesso_direita,
     excesso_esquerda,excesso_frontal, painel_avariado, sem_cabo_de_energia'];
$option = [];
foreach ($checkboxes as $option) {
   $option[$option] = isset($_POST['checkboxes'][$option]) ? 1 : 0;
}
$stmt = $connect->prepare("INSERT INTO situacao (sem_lona, container_desgastado, avaria_lateral_direita,
    avaria_lateral_esquerda, avaria_teto, avaria_frente, sem_lacre, adesivos_avariados, excesso_altura, excesso_direita,
   excesso_esquerda,excesso_frontal, painel_avariado, sem_cabo_de_energia) VALUES (?, ? , ?, ? , ? , ? , ? , ? , ? , ? , ? , ?, ?, ?)");
$stmt->bind_param(
   "iii",
   $option['sem_lona'],
   $option['containter_desgastado'],
   $option['avaria_lateral_direita'],
   $option['avaria_lateral_esquerda'],
   $option['avaria_teto'],
   $option['avaria_frente'],
   $option['avaria_frente'],
   $option['avaria_frente'],
   $option['excesso_altura'],
   $option['excesso_direita'],
   $option['excesso_esquerda'],
   $option['excesso_frontal'],
   $option['painel_avariado'],
   $option['sem_cabo_de_energia'],
);







$resultado = $connect->query($sql1);

$connect->close();
header('location: ../paginas/pagina2Aluno.php', true, 301);
exit();
