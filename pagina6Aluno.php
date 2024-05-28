<html lang="en"><head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css/Menu.css">
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepgC.css">
    <link rel="stylesheet" href="css/stylepgV.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Document</title>

    </head>
<body class="fundinho">

    <div class="divMain2">
        <div class="divLogin divLogin-pedido">
            <h2 class="texto">Produtos</h2>           
            <form method="POST0" action="processoCarga.php">
                <br>
                <input type="text" name="nota" size="28" class="caixaTexto" placeholder="Produto faltando"><br>
                <br>
                <input type="text" name="pedido" size="10" class="caixaTexto" placeholder="Faltando?">
                <input type="text" name="doca" size="10" class="caixaTexto" placeholder="Avariado?"><br>
                <br>
                <input type="submit" class="botao">
            </form>
        </div>        
    </div>

<script src="js/popup.js"></script>

<?php
    include 'menu.php'
?>

</body>
</html>