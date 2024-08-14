<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylepg2Prof.css">
        <link rel="stylesheet" href="../css/styleFundo.css">
        <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
        <title>Compra</title>
    </head>

    <body class="mando">
        <?php
        include 'menuProf.php'
        ?>
        <div class="divProf2">
            <form method="POST0" action="">
                <input type="text" name="pedido" size="20" class="caixaTexto produtoPositione" placeholder="Pedido de venda">
            </form>
            <form method="POST0" action="">
                <div class="posicaoP2">
                    <div class="produto">
                        <input type="text" name="Produto1" size="20" class="caixaTexto produtoPosition produtoPositionUp" placeholder="Produto">
                        <br>
                        <input type="text" name="Produto2" size="20" class="caixaTexto produtoPosition" placeholder="Produto">
                        <br>
                        <input type="text" name="Produto3" size="20" class="caixaTexto produtoPosition" placeholder="Produto">
                        <br>
                        <input type="text" name="Produto4" size="20" class="caixaTexto produtoPosition" placeholder="Produto">
                        <br>
                        <input type="text" name="Produto5" size="20" class="caixaTexto produtoPosition" placeholder="Produto">
                        <br>
                        <input type="text" name="Produto6" size="20" class="caixaTexto produtoPosition" placeholder="Produto">
                    </div>
                    <div class="UNQTD">
                        <div class="inline UNQTDPosition">
                            <h2 class="UNposition">UN</h2>
                            <h2 class="QTDposition">QTD</h2>
                            <h2 class="VUNTposition">V.Unt</h2>
                            <h2 class="VTOTALposition">V.Total</h2>
                        </div>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                        <br>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                        <br>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                        <br>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                        <br>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                        <br>
                        <div class="inline UNQTDPositionInput">
                            <input type="text" name="UN" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="QTD" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Unt" size="20" class="caixaTextoUNQTD Position">
                            <input type="text" name="V.Total" size="20" class="caixaTextoUNQTD Position">
                        </div>
                    </div>
                </div>
                <div class="divMensagem">
                    <input type="text" name="Escreva" size="20" class="mensagem" placeholder="Escreva">
                </div>
                <input type="submit" class="botao posicaoBotao">
            </form>
        </div>
    </body>
</html>