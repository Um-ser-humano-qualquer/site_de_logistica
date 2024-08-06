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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_produto = $_POST['Produtos'];
        $qtd = $_POST['QTD'];

        $stmt = $connect->prepare("SELECT * FROM produto WHERE nome_produto = ?  AND Quantidade > 0 AND turma_id = ?");
        $stmt->bind_param("si", $nome_produto, $qtd);

        $stmt->execute();

        $result = $stmt->get_result();

        $posicoes = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posicoes[] = array(
                    'posicao' => $row["posicao"],
                    'quantidade' => $row["quantidade"]
                );
            }
        }
        echo "<script>var posicoes = " . json_encode($posicoes) . ";</script>";
        echo "<script>var quantidade = $qtd;</script>";
    }
}
