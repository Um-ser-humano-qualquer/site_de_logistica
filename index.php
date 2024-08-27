<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/styleDoLogin.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
        <title>Logística Senai</title>
    </head>

    <body class="sign-up-js">
        <div class="container">
            <div class="content first-content">
                <div class="second-column second-position1">
                    <h2 class="title title-second">Login de Aluno</h2>
                    <br>
                    <form method="post" action="php/processoLoginAluno.php" class="form">
                        <input type="text" name="username" id="emailAluno" placeholder="Usuário">
                        <br>
                        <input type="password" name="password" id="senhaAluno" placeholder="Senha" required>
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                    </form>
                </div> <!-- second-column -->
                <div class="first-column first-position1">
                    <button id="signin" class="btn-link btn-link-right">Você é um professor? Clique aqui!</button>
                </div> <!-- first-column -->
            </div> <!-- content first-content -->
            <div class="content second-content">
                <div class="second-column second-position2">
                    <h2 class="title title-second">Login de Professor</h2>
                    <br>
                    <form method="post" action="php/processoLoginProf.php" class="form">
                        <input type="text" name="username" id="emailProf" placeholder="Usuário">
                        <br>
                        <input type="password" name="password" id="senhaProf" placeholder="Senha" required>
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                        <a href="paginas/cadastroProf.php" class="btn-linkB btn-link-rightB">Ainda não fez cadastro? Clique aqui!</a>
                    </form>
                </div> <!-- second-column -->
                <div class="first-column first-position2">
                    <button id="signup"class="btn-link btn-link-left">Você é um aluno? Clique aqui!</button>
                </div> <!-- first-column -->
            </div> <!-- content second-content -->
        </div> <!-- container -->
        <script src="js/login.js"></script>
    </body>
</html>