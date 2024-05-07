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
        if(isset($_POST['emailProf']) && isset($_POST['senhaProf'])) {
            $emailProf = $connect->real_escape_string($_POST['emailProf']);
            $senhaProf = $connect->real_escape_string($_POST['senhaProf']);

            $SQL = "SELECT `idProf`, `emailProf` FROM `Professores` WHERE `emailProf` = ? AND `senhaProf` = ? AND `ativo` = 's';";

            if($stmt = $connect->prepare($SQL)) {
                $stmt->bind_param("ss", $emailProf, $senhaProf);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if($resultado->num_rows != 0) {
                    $row = $resultado->fetch_assoc();
                    $_SESSION['idProf'] = $row['idProf'];
                    $_SESSION['nomeProf'] = $row['emailProf'];
                    $connect->close();

                    header('Location: pagina1Prof.php', true, 301);
                    exit();
                } else {
                    $connect->close();
                    header('Location: loginProf.php', true, 301);
                }
            } else {
                echo "Erro ao preparar a declaração: " . $connect->error;
            }
        } else {
            echo "Os campos de email e senha devem ser preenchidos.";
        }
    }
?>
