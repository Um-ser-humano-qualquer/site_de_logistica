<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg6Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <meta name="viewport" content="w1.0">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Vistoria-Conferência</title>
</head>

<body class="fundinhoA">
    <div class="divMain2 inline">
        <div class="divLogin">
            <h1 class="texto">Descrição do produto:</h1>
            <form method="POST" action="../php/processoAlunopg4.php" name="form" id="form">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto posicaoCaixa">
                <table class="texto">
                    <tr>
                        <th></th>
                        <th>
                            <h3>QTD</h3>
                        </th>
                        <th>
                            <h3>R$/UNIT</h3>
                        </th>
                        <th>
                            <h3>R$ TOTAL</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class="UN">UN</h3>
                        </th>
                        <div class="Btable"></div>
                        <div>
                            <td>
                                <input type="text" class="tableL texto" name="qtd" id="qnt" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" name="valor_unit" id="valor_unit" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" name="valor_total" id="valor_total">
                            </td>
                        </div>
                    </tr>
                </table>
                <input type="submit" class="botaou botaoPosicao">
            </form>
        </div>
        <div class="divLogin2">
            <h1 class="texto">Descrição do produto:</h1>
            <form method="POST" action="../php/processoAlunopg4.php" name="form" id="form">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto posicaoCaixa">
                <table class="texto">
                    <tr>
                        <th></th>
                        <th>
                            <h3>QTD</h3>
                        </th>
                        <th>
                            <h3>R$/UNIT</h3>
                        </th>
                        <th>
                            <h3>R$ TOTAL</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h3 class="UN">UN</h3>
                        </th>
                        <div class="Btable"></div>
                        <div>
                            <td>
                                <input type="text" class="tableL texto" name="qtd" id="qnt" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" name="valor_unit" id="valor_unit" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" name="valor_total" id="valor_total">
                            </td>
                        </div>
                    </tr>
                </table>
                <input type="submit" class="botaou botaoPosicao">
            </form>
        </div>
    </div>
    <?php
        include 'menuAluno.php'
    ?>
    <script src="../js/calcular_preco.js"></script>
</body>
</html>