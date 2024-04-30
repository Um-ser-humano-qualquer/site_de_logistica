<html>
    <head>
        <title>Logística Senai</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="css/style.css">
        <style>

.divLogin{
    height: auto;
    top: 50%;
    right: 6%;
    transform: translate(-50% , -50%);
    position: fixed;
    padding: 72px 20px;
    background-color: #1cabd6;
    border-radius:100px;
    box-shadow: 15px 17px 20px 0px #0000007f;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgb(255, 255, 255);
    }

.linkR{
    position: fixed;
    left: 65%;
    top: 69%;
    color: #fff;
    }

.botao{
    background-color: #1e96ba;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    width: 9rem;
    height: 2rem;   
    border-radius: 15px;
    color: white;
    border-block-color: revert;
    border-block-start-width: initial;
    border-block-end: none;
    border-left-color: #ffffff00;
    border-right-color: #ffffff00;
    border-top-color: #ffffff00;
    cursor: pointer;
}
.senaiLogo2{
    position: fixed;
    top: -11%;
    left: 77%;
}


</style>
    </head>
    <body class="fundo" background="img/fundo_profLogin.png">	

            <center>
            <img src="img/senai-logo.png" class="senaiLogo" alt="Image" height="420" width="420">
			<div class="divLogin">
			<form method="post" action="php/processoLoginP.php" id="login" name="login">
				<h1>Login de Professor:</h1>
                <br>
				<input type="text" name="email" id="email" size="20" class="caixaTexto" placeholder="email"><br/>
				<br>
                <br>
				<input type="password" name="senha" id="senha" size="20" class="caixaTexto" placeholder="senha"><br/>
				<br>
                <br>
                <input type="submit" value="registrar" class="botao"/>
                
			</form>
			</div>
                <a href="pagina1Aluno.php" class="linkR">Você é um aluno? Clique aqui!</a>
			</form>
			</div>
            <p></p>
            </center>
            
    </body>
</html>
