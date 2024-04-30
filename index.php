<html lang="pt-br">
    <head>
        <title>Logística Senai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/stylep.css">
        <link rel="stylesheet" href="css/styleDoBotao.css">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body class="fundo" background="img/fundo_alunoLogin.png">	

            <center>
            <img src="img/senai-logo.png" class="senaiLogoL" alt="Image" height="420" width="420">
			<div class="divLoginL" class="text-box">
			<form method="post" action="processoLogin.php" id="formcadastro" name="formcadastro">
				<h1 >Login de alunos:</h1>
                <br>
				<input type="text" name="email" id="email" size="20" class="caixaTexto" placeholder="email"><br/>
				<br>
                <br>
				<input type="password" name="senha" id="senha" size="20" class="caixaTexto" placeholder="senha"><br/>
				<br>
                <br>
                <button class="btn btn-1 btn-sep icon-info">acessar</button>
                <a href="loginProf.php" class="linkL">Você é um professor? Clique aqui!</a>
			</form>
			</div>
            </center>
            
    </body>
</html>