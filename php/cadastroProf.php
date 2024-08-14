<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
	<center>

	<?php
			
			$hostname = "127.0.0.1";
			$user = "root";
			$password = "";
			$database = "logistica";
		
			$conexao = new mysqli($hostname, $user, $password, $database);

			if ($conexao -> connect_errno) {
				echo "Failed to connect to MySQL: " . $conexao -> connect_error;
				exit();
			} else {
				// Evita caracteres especiais (SQL Inject)
				$emailProf = $conexao -> real_escape_string($_POST['emailProf']);
				$senhaProf = $conexao -> real_escape_string($_POST['senhaProf']);
				$nomeProf = $conexao -> real_escape_string($_POST['nomeProf']);

                $sql="INSERT INTO `professores`
							(`emailProf`, `senhaProf`, `nomeProf`)
						VALUES
							('".$emailProf."', '".$senhaProf."','".$nomeProf."')";

				$resultado = $conexao->query($sql);
				
				$conexao -> close();
				header('Location: pagina2Prof.php', true, 301);
				exit();
			}
		?>
