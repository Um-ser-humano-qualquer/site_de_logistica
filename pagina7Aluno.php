<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/StylepgC.css">
        <link rel="stylesheet" href="css/stylepgV.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <title>Movimentação2</title>
    </head>
    
    <body class="fundinhoA">
        <div class="divMain2">
            <div class="divMain3"></div>
            <div class="divLogin divLogin-pedido posicao-pedidoR"><!--Primeira tabela-->       
                <form method="POST0" action="processoCarga.php">
                    <br>
                    <input type="text" name="nota" size="28" class="caixaTexto" placeholder="">
                    <br>
                    <br>
                    <table class="texto">
                        <tr>
                            <th></th>
                            <th class="QTD">
                                <h3>QTD</h3>
                            </th>
                            <th class="UNIT">
                                <h3>R$/UNIT</h3>
                            </th>
                            <th class="TOTAL">
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
                                    <input type="text" class="tableL texto">
                                </td>
                                <td>
                                    <input type="text" class="tableC texto">
                                </td>
                                <td>
                                    <input type="text" class="tableR texto">
                                </td>
                            </div> 
                        </tr>
                    </table>
            </div>   

     <div class="linhaB"></div> <!-- Importante não deletar (barra lateral)-->
        </div>

        <script src="js/popup.js"></script> <!-- Faço a menor ideia (pergumtar mais tarde)-->

        <?php 
            include 'menu.php'
        ?>

    </body>
</html>