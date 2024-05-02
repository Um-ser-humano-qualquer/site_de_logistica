<html>
    <head>
        <title>Funerária Santa maria</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

	<style>
		.divLogin{
			border: 1px solid #969696;
			width: 25%;
			position: relative;
			box-shadow: inset 0 0 10px 0.1px black;
			background-color: #88dbd5;
            display: flex;
		}
		.fundo{
			background-image: url(Imagens/verde_marinho.avif);
            background-size: 105% 13500%;
            background-repeat: no-repeat;
			font-family: Comic Sans MS;
		}
        .caixaTexto{
            position: absolute;
            width: 90%;
			left: 5%;
        }
        .palavras{
            position: absolute;
			left: 5%;
        }
		.titulo{
			position: relative;
			left: 16%;
		}
		.link{
			position: absolute;
			left: 45%;
		}
	</style>
	
    <body class="fundo">	
            <center>
			<div class="divLogin">
			<form method="post" action="pagina2Prof.php" id="formlogin" name="formlogin" >
				<h2 class="titulo">Cadastrar:</h2>
				<label class="palavras">E-mail:</label>
				<br>
				<input type="text" name="emailProf" id="emailProf" size="20" class="caixaTexto"><br />
                <br>
				<label class="palavras">Senha: </label>
				<br>
				<input type="text" name="senhaProf" id="senhaProf" size="20" class="caixaTexto"><br />
				<br>
                <label class="palavras">Nome:</label>
				<br>
				<input type="text" name="nomeProf" id="nomeProf" size="20" class="caixaTexto"><br/>
                <br>
				<input type="submit" value="registrar" class="palavras"/>
				<br>
				<a href="login.php" class="link">Já possui cadastro? Clique aqui!</a>
				<p></p>
			</form>
			</div>
            </center>

    </body>
</html>