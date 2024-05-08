<html lang="pt-br">
    <head>
        <title>Logística Senai</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="styleDoLogin.css">
    </head>

    <body>
        <div class="container">
            <div class="content first-content">
                <div class="second-column">
                    <a href="pagina1Aluno.php">aqui</a>
                    <br>
                    <form action="post" action="processoLoginAluno.php" class="form">
                        <input type="email" name="emailAluno" id="emailAluno" placeholder="email">
                        <br>
                        <input type="password" name="senhaAluno" id="senhaAluno" placeholder="senha">
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                    </form>
                </div> 
                <div class="first-column">
                    <img src="img/senai-logo.png" class="senaiLogo">
                    <button class="btn-link btn-link-right">Você é um professor? Clique aqui!</button>
                </div>
            </div>
            <div class="content second-content">
                <div class="first-column">
                    <button class="btn-link btn-link-left">Você é um Aluno? Clique aqui!</button>
                <div class="second-column">
                    <h2 class="title title-second">Login de Professor</h2>
                    <br>
                    <form action="post" action="processoLoginProf.php" class="form">
                        <input type="email" name="emailProf" id="emailProf" placeholder="email">
                        <br>
                        <input type="password" name="senhaProf" id="senhaProf" placeholder="senha">
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                    </form>
                    </div>
                </div> 
            </div> 
    </body>
</html>