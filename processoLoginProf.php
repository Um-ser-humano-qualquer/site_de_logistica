<?php
    session_start();

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "root";
    $database = "sa_logistica";

    $connect = new mysqli($hostname, $user, $password, $database);

    if ($connect->connect_errno) {
        echo "Falha ao conectar ao MySQL: " . $connect->connect_error;
        exit();
    } else {
        if(isset($_POST['emailAluno']) && isset($_POST['senhaAluno'])) {
            $emailProf = $connect->real_escape_string($_POST['emailProf']);
            $senhaProf = $connect->real_escape_string($_POST['senhaProf']);

            $SQL = "SELECT `idAluno`, `emailAluno` FROM `alunos` WHERE `emailAluno` = ? AND `senhaAluno` = ? AND `ativo` = 's';";

            if($stmt = $connect->prepare($SQL)) {
                $stmt->bind_param("ss", $emailAluno, $senhaAluno);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if($resultado->num_rows != 0) {
                    $row = $resultado->fetch_assoc();
                    $_SESSION['idAluno'] = $row['idAluno'];
                    $_SESSION['nomeAluno'] = $row['emailAluno'];
                    $connect->close();

                    header('Location: pagina1Aluno.php', true, 301);
                    exit();
                } else {
                    $connect->close();
                    header('Location: index.php', true, 301);
                }
            } else {
                echo "Erro ao preparar a declaração: " . $connect->error;
            }
        } else {
            echo "Os campos de email e senha devem ser preenchidos.";
        }
    }
?>
