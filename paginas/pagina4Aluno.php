<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg4Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <meta name="viewport" content="w1.0">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Vistoria-Conferência</title>
</head>

<body class="fundo">
    <div class="divMain2">
        <div class="divMain3"></div>
        <div class="divLogin divLogin-pedido posicao-pedidoL">
            <h1 class="texto">Produto</h1>
            <form method="POST" action="../php/processoAlunopg4.php" name="form" id="form">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto" placeholder="Nome do Produto">
                <br>
                <br>
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
                <br>
                <div class="inline">
                    <div class="faltando">
                        <h2>Faltando?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]">
                        </div>
                    </div>
                    <div class="avariado">
                        <h2>Avariado?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]">
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="botao">
            </form>
        </div>

        <div class="divLogin divLogin-pedido posicao-pedidoR">
            <h1 class="texto">Produto</h1>
            <form method="POST" action="../php/processoAlunopg4.phpcessoAlunopg4">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto" placeholder="Nome do Produto">
                <br>
                <br>
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
                        <div class="posicaoTabela">
                            <td>
                                <input type="text" class="tableL texto" name="qtd" id="qnt" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" name="valor_unit" id="valor_unit" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" name="valor_total">
                            </td>
                        </div>
                    </tr>
                </table>
                <br>
                <div class="inline">
                    <div class="faltando">
                        <h2>Faltando?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="faltando">
                        </div>
                    </div>
                    <div class="avariado">
                        <h2>Avariado?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="avariado">
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="botao">

            </form>
        </div>

        <div class="divLogin divLogin-pedido posicao-pedidoBL">
            <h1 class="texto">Produto</h1>
            <form method="POST" action="../php/processoAlunopg4.php">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto" placeholder="Nome do Produto">
                <br>
                <br>
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
                        <div class="posicaoTabela">
                            <td>
                                <input type="text" class="tableL texto" name="qtd" id="qnt" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" name="valor_unit" id="valor_unit" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" name="valor_total">
                            </td>
                        </div>
                    </tr>
                </table>
                <br>
                <div class="inline">
                    <div class="faltando">
                        <h2>Faltando?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="faltando">
                        </div>
                    </div>
                    <div class="avariado">
                        <h2>Avariado?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="avariado">
                        </div>
                    </div>
                </div>
                <br>

                <input type="submit" class="botao">

            </form>
        </div>

        <div class="divLogin divLogin-pedido posicao-pedidoBR">
            <h1 class="texto">Produto</h1>
            <form method="POST" action="../php/processoAlunopg4.php">
                <br>
                <input type="text" name="nome_produto" size="28" class="caixaTexto" placeholder="Nome do Produto">
                <br>
                <br>
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
                        <div class="posicaoTabela">
                            <td>
                                <input type="text" class="tableL texto" name="qtd" id="qnt" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableC texto" name="valor_unit" id="valor_unit" onkeyup="calcular_preco()">
                            </td>
                            <td>
                                <input type="text" class="tableR texto" name="valor_total">
                            </td>
                        </div>
                    </tr>
                </table>
                <br>
                <div class="inline">
                    <div class="faltando">
                        <h2>Faltando?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="faltando">
                        </div>
                    </div>
                    <div class="avariado">
                        <h2>Avariado?</h2>
                        <div class="posicao">
                            <input type="checkbox" name="check[]" value="avariado">
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="botao">
            </form>
        </div>
    </div>
    <?php
    include 'menuAluno.php'
        ?>
        <script src="../js/calcular_preco.js"></script>
</body>

</html>