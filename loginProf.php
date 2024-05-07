<html lang="pt-br">
    <head>
        <title>Logística Senai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleDoBotao.css">
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body class="fundo" background="img/fundo_profLogin.png">	

            <center>
            <img src="img/senai-logo.png" class="senaiLogoR" alt="Image" height="420" width="420">
			<div class="divLogin">
			<form method="post" action="login.php" id="login" name="login">
				<h1>Login de Professor:</h1>
                <br>
				<input type="text" name="email" id="email" size="20" class="caixaTexto" placeholder="email"><br/>
				<br>
                <br>
				<input type="password" name="senha" id="senha" size="20" class="caixaTexto" placeholder="senha"><br/>
				<br>
                <br>
                <button class="btn btn-2 btn-sep icon-info">acessar</button>
                <a href="pagina2Prof.php" class="linkR">Você é um aluno? Clique aqui!</a>
			</form>
            </div>
            </center>
            
    </body>
</html>