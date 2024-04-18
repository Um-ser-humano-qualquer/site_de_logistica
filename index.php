<html>
    <head>
        <title>Logística Senai</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="style.css">
    <style>
    .divLoginL{
    height: auto;
    top: 50%;
    left: 30%;
    transform: translate(-50% , -50%);
    position:fixed;
    padding: 72px 20px;
    background-color: #237deb;
    border-radius:100px;
    box-shadow: 15px 17px 20px 0px #0000007f;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgb(255, 255, 255);

    }
.senaiLogo{
    position: fixed;
    top: -11%;
    left: 1%;
    }
    
.botaoo{
    background-color: #1b68c4;
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


    </style>
    </head>
    <body class="fundo" background="img/fundo_alunoLogin.png">	

            <center>
            <img src="img/senai-logo.png" class="senaiLogo" alt="Image" height="420" width="420">
			<div class="divLoginL">
			<form method="post" action="processoLogin.php" id="formcadastro" name="formcadastro">
				<h1 >Login de alunos:</h1>
                <br>
				<input type="text" name="email" id="email" size="20" class="caixaTexto" placeholder="email"><br/>
				<br>
                <br>
				<input type="password" name="senha" id="senha" size="20" class="caixaTexto" placeholder="senha"><br/>
				<br>
                <br>
                <input type="submit" value="Entrar" class="botaoo"/>
                
			</form>
			</div>
            <a href="loginProf.php" class="link">Você é um professor? Clique aqui!</a>
            </center>
            
    </body>
</html>
