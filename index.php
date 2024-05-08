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
                    <h2 class="title title-second">login de Aluno</h2>
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
                    <a href="" class="linkR">Você é um professor? Clique aqui!</a>
                </div>
            </div>
            <div class="content second-content">
                <div class="first-column"></div>
                    <h2 class="title">Você é um Aluno?</h2>
                    <button class="btn">clique aqui!</button>
                <div class="second-column">
                    <h2 class="title">login de Professor</h2>
                    <form action="post" action="processoLoginProf.php">
                        <input type="email" name="emailAluno" id="emailAluno" placeholder="email">
                        <input type="password" name="senhaAluno" id="senhaAluno" placeholder="senha">
                        <button class="btn">acessar</button>
                    </form>
                </div> 
            </div> 
    </body>
</html>