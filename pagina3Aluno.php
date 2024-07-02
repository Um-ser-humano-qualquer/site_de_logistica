<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylepgC.css">
        <link rel="stylesheet" href="css/stylepgF.css">
        <link rel="stylesheet" href="css/stylepgA.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
        <title>Recebimento</title>
    </head>

    <body class="fundinhoB">
        <div class="divMain">
            <div class="divLoginnn">
                <h2 class="texto">Vistoria e Conferência - Carga</h2>
                <form method="POST0" action="processoCarga.php">
                    <br>
                    <input type="text" name="nota" size="20" class="caixaTexto" placeholder="Nota fiscal">
                    <br>
                    <br>
                    <input type="text" name="pedido" size="20" class="caixaTexto" placeholder="Pedido de compra">
                    <br>
                    <br>
                    <input type="text" name="doca" size="20" class="caixaTexto" placeholder="Doca">
                    <br>
                    <br>
                    <input type="submit" class="botao">
                </form>
                <a href="pagina4Aluno.php">Não tenho um pedido.</a>
            </div>        
        </div>

        <script src="js/popup.js"></script> 

        <?php 
            include 'menuAluno.php'
        ?>
    </body>
</html>