<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepgC.css">
    <link rel="stylesheet" href="stylepgV.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


</head>

<body class="fundinho">
    
    <div class="divMain">
        <div class="divLogin divLogin-left">
            <h2 class="texto">Vistoria e Conferência - Carga </h2>    
            <form method="POST0" action="processoAlunopg2.php">
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
        </div>
    </div>

    <?php
        include 'menu.php'
    ?>
    </body>
</html>