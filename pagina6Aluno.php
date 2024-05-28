<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
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
                    <input type="text" name="nota" size="28" class="caixaTexto" placeholder="Produto faltando">
                    <br>
                    <br>
                    <table>
                        <tr>
                            <th>&nbsp;</th>
                            <th>QTD</th>
                            <th>R$/UNIT</th>
                            <th>R$ TOTAL</th>
                        </tr>
                        <tr>
                            <td>UN</td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>
                    </table>
                    <br>
                    <div class="sla">
                        <div class="faltando">
                            <form action="post">
                                <h2>Faltando?</h2>
                                <div class="posicao">
                                    <input type="checkbox">
                                </div>
                            </form>
                        </div>
                        <div class="avariado">
                            <form action="post">
                                <h2>Avariado?</h2>
                                <div class="posicao">
                                    <input type="checkbox">
                                </div>
                            </form>
                        </div>
                    </div>
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