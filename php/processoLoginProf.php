<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "logistica";

$connect = new mysqli($hostname, $user, $password, $database);

if ($connect->connect_errno) {
    echo "Falha ao conectar ao MySQL: " . $connect->connect_error;
    exit();
} else
    if (isset($_POST['username']) && isset($_POST['password']))
        $username = $connect->real_escape_string($_POST['username']);
$password = $connect->real_escape_string($_POST['password']);

$SQL = "SELECT `id`, `username` 
            FROM `professor` 
            WHERE `username` = ? AND `password` = ?";

if ($stmt = $connect->prepare($SQL)) {
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows != 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $connect->close();

        header('Location: ../pagina1Prof.php', true, 301);
        exit();
    } else {
        $connect->close();
        header('Location: index.php', true, 301);
    }
}