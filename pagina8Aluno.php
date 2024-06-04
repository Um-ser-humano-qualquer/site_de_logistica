<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="css/styleMenu.css">
        <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylepgC.css">
        <link rel="stylesheet" href="css/stylepgV.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    
        <title>Container</title>
    </head>

    <body class="fundinhoA">
        <div class="divLogin-ped">
        <form method="POST0" action="processoAlunopg2.php">
        <div class="divLogin divLogin-left">
                <input type="text" name="placa_caminhao" size="20" class="caixaTexto" placeholder="Placa do caminhão">
                <br/>
                <br>
                    <input type="text" name="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista">
                <br/>
                <br>
                    <input type="text" name="container" size="20" class="caixaTexto" placeholder="Container">
                <br/>
                <br>
                    <input type="text" name="navio" size="20" class="caixaTexto" placeholder="Navio">
                <br/>
                <br>
                    <input type="text" name="cliente" size="20" class="caixaTexto" placeholder="Cliente">
                <br/>
            </div>
        </div>
    </form>
        <?php
            include 'menuAluno.php'
        ?>   
    </body>
</html>