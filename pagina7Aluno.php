<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentação2</title>
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/stylepgG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
    <title>Movimentação</title>
</head>

<body class="fundo">
    <div class="divMain2 ">
        <div class="div-mid">
            <div class="texto">
                <input type="text" size="20">
                <br><br>
                <input type="text" size="20">
            </div>

            <div class="tabela">
                <tr>
                    <div class="Btable">
                        <div class="posicaoTabela">
                            <td>
                                <input type="text" class="tableL texto" placeholder="QNT">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" placeholder="R$/UNIT">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                            </td>
                        </div>
                    </div>
                </tr>

                <tr>
                    <div class="Btable2">
                        <div class="posicaoTabela2">
                            <td>
                                <input type="text" class="tableL texto" placeholder="QNT">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" placeholder="R$/UNIT">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                            </td>
                        </div>
                    </div>
                </tr>

            </div>
        </div>

        <div class="div-ok">
            <h3>Finalizar</h3>
            <br>
            <input type="submit" value="OK" class="botao">
            <br>
            <br>
            <input type="submit" value="OK" class="botao">
        </div>

    </div>
    <?php
    include 'menuAluno.php'
    ?>

</body>

</html>