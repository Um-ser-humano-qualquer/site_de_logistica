<?php 
include_once("conexao.php");

if (isset($_POST['username']) && isset($_POST['password']))
    $username = $connect->real_escape_string($_POST['username']);
$password = $connect->real_escape_string($_POST['password']);

$SQL = "SELECT `id`, `username`, `turma_id` 
            FROM `aluno` 
            WHERE `username` = ? AND `password` = ?";

if ($stmt = $connect->prepare($SQL)) {
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows != 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['turma_id'] = $row['turma_id'];
        $connect->close();

        header('Location: ../paginas/pagina1Aluno.php', true, 301);
        exit();
    } else {
        $connect->close();
        header('Location:index.php?error=Incorect User name or password', true, 301);
    }
}