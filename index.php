<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Logística Senai</title>
        <link rel="stylesheet" href="styleDoLoginn.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

    <body class="sign-up-js">
        <div class="container">
            <div class="content first-content">
                <div class="second-column second-position1">
                    <h2 class="title title-second">Login de Aluno</h2>
                    <br>
                    <form method="post" action="processoLoginAluno.php" class="form">
                        <input type="email" name="emailAluno" id="emailAluno" placeholder="email">
                        <br>
                        <input type="password" name="senhaAluno" id="senhaAluno" placeholder="senha">
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                    </form>
                </div> <!-- second-column -->
                <div class="first-column first-position1">
                    <img src="img/senai-logo.png" class="senaiLogo1">
                    <button id="signin" class="btn-link btn-link-right">Você é um professor? Clique aqui!</button>
                </div> <!-- first-column -->
            </div> <!-- content first-content -->
            <div class="content second-content" background="img/senai-logo.png">
                <div class="second-column second-position2">
                    <h2 class="title title-second">Login de Professor</h2>
                    <br>
                    <form method="post" action="processoLoginProf.php" class="form">
                        <input type="email" name="emailProf" id="emailProf" placeholder="email">
                        <br>
                        <input type="password" name="senhaProf" id="senhaProf" placeholder="senha">
                        <br>
                        <button class="btn-second btn-right">acessar</button>
                    </form>
                </div> <!-- second-column -->
                <div class="first-column first-position2">
                    <img src="img/senai-logo.png" class="senaiLogo2">
                    <button id="signup"class="btn-link btn-link-left">Você é um Aluno? Clique aqui!</button>
                </div> <!-- first-column -->
            </div> <!-- content second-content -->
        </div> <!-- container -->
        <script src="js/login.js"></script>
    </body>
</html>