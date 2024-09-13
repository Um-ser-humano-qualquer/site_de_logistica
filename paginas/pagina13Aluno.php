<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg13Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title> Solicitações </title>
</head>

<body class="fando">
    <div class="divMainT">
        <div class="candy">
            <h1 class="texto ohyeah">Check List</h1>
        </div>
        <div class="over"></div>
        <div class="divLogin-lego">
            <form method="POST" action="../php/guarda_id.php" class="top">
                <input type="text" name="Pedido1" id="Pedido1" size="15" class="caixaTexto textoPosicao" placeholder="Pedido nº1">             
                <input type="text" name="Pedido2" id="Pedido2" size="15" class="caixaTexto textoPosicao" placeholder="Pedido nº2"> 
                <input type="text" name="Pedido3" id="Pedido3" size="15" class="caixaTexto textoPosicao" placeholder="Pedido nº3"> 
                <input type="text" name="Pedido4" id="Pedido4" size="15" class="caixaTexto textoPosicao" placeholder="Pedido nº4">
                <input type="submit" class="sbt-OK" value="OK">
            </form>
        </div>
    </div>

    <?php
    include 'menuAluno.php'
        ?>

</body>

</html>