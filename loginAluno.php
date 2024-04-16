<?php

    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "sa_logistica";


    $connect = new mysqli ($hostname, $user, $password, $database);

    if ($connect -> connect_errno) {
        echo "Failed to connect to MySQL: " . $connect -> connect_error;
        exit();
    } else{

        $emailAluno = $connect -> real_escape_string($_POST['emailAluno']);
        $senhaAluno = $connect -> real_escape_string($_POST['senhaAluno']);

       //verificação de login do aluno

       $SQL = "SELECT  `idAluno`, `emailAluno` FROM `alunos`
            WHERE `emailAluno` = '".$emailAluno."'
            AND `senhaAluno` = '".$senhaAluno."'
            AND `ativo` = 's';";

        $result = $connect->query($SQL);

        if($resultado->num_rows != 0)
        {
            $row = $resultado -> fetch_array();
            $_SESSION['idAluno'] = $row[0];
            $_SESSION['nomeAluno'] = $row[1];
            $connect -> close();
            
            header('Location: pagina1.php', true, 301);
            exit();
        } else {
            
            $connect -> close();
            header('Location: index.php', true, 301);
        }
    }


?>