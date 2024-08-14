<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg3Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Recebimento</title>
</head>

<body class="fundo">
    <div class="divMain">
        <div class="divLoginnn">
            <h2 class="texto">Vistoria e Conferência - Carga</h2>
            <form method="POST" action="../php/processoAlunopg3.php">
                <br>
                <input type="text" name="nota" size="20" class="caixaTexto" placeholder="Nota fiscal">
                <br>    
                <br>
                <input type="text" name="pedido" size="20" class="caixaTexto" placeholder="Pedido de compra">
                <br>
                <br>
                <input type="submit" class="botao perna ">
            </form>
            <form method="POST" action="pagina4Aluno.php">
                <input type="submit" value="RNC" class="bata poti">
            </form>
        </div>
    </div>

    <?php
    include 'menuAluno.php'
    ?>
</body>

</html>