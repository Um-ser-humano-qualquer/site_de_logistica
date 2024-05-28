<<<<<<< HEAD
<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Menu.css">
=======
<html>
    <link rel="stylesheet" href="css/styleMenu.css">
>>>>>>> 8489fa180678f0a6bc1713695e0dfea1b5e78785
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepgC.css">
    <link rel="stylesheet" href="css/stylepgV.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


</head>

<body class="fundo">

    <div class="divMain">
        <div class="divLogin divLogin-left">
            <h2 class="texto">Vistoria e Conferência - Carga </h2>
            <form method="POST0" action="processoCarga.php">
                <br>
                <input type="text" name="nota" size="20" class="caixaTexto" placeholder="Nota fiscal"><br>
                <br>
                <input type="text" name="pedido" size="20" class="caixaTexto" placeholder="Pedido de compra">
                <br>
                <br>
                <input type="text" name="doca" size="20" class="caixaTexto" placeholder="Doca"><br>
                <br>
                <input type="submit" class="botao">
            </form>
            <a href="pagina6Aluno.php">Não tenho um pedido.</a>
        </div>        
    </div>
<script src="js/popup.js"></script>
<?php
        include 'menu.php'
    ?>
</body>
</html>