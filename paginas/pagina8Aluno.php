<?php
include_once("../php/conexao.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="w1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylepg8Aluno.css">
        <link rel="stylesheet" href="../css/styleFundo.css">
        <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
        <?php
        include 'MenuAluno.php';
        ?>
        <title>Picking</title>
    </head>

    <body class="fundolegal">
        <div class="divMain">

            <center>
                <h2 class="texto">Escolha de Picking</h2>
            </center>
            
                <br>
                <div class="BlueBlock">
                    <form action="pagina8Aluno.php" method="POST">
                        <input type="text" name="soli1" size="15" class="caixaTexto textoPosicao"
                            placeholder="Pedido de compra nº">
                        <br>
                        <br>
                        <input type="text" name="soli2" size="15" class="caixaTexto textoPosicao"
                            placeholder="Pedido de compra nº">
                        <br>
                        <br>
                        <input type="text" name="soli3" size="15" class="caixaTexto textoPosicao"
                            placeholder="Pedido de compra nº">
                        <br>
                        <br>
                        <input type="text" name="soli4" size="15" class="caixaTexto textoPosicao"
                            placeholder="Pedido de compra nº">
                        <br>
                        <br>
                        <input type="text" name="soli5" size="15" class="caixaTexto textoPosicao"
                            placeholder="Pedido de compra nº">
                        <br>
                        <br>

                </div>
                <div class="OrangeBlock">
                    <input type="submit" class="botaob" value="abrir">
                    <br>
                    <br>
                    <br>
                    <input name="num2" type="submit" class="botaob" placeholder="abrir">
                    <br>
                    <br>
                    <br>
                    <input name="num3" type="submit" class="botaob" placeholder="abrir">
                    <br>
                    <br>
                    <br>
                    <input name="num4" type="submit" class="botaob" placeholder="abrir">
                    <br>
                    <br>
                    <br>
                    </form>

                    <input name="num5" type="submit" class="botaob" placeholder="abrir">
                    </form>
                </div>
                <?php
                include_once("../php/conexao.php");
                error_reporting(0);
                $num_pedido = ($_POST['soli1']);

                $sql = "SELECT * FROM `pedido_compra`
                WHERE `id_pedido` = '" . $num_pedido . "'";
                $result = $connect->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<div class='formResult'>
                    <span>nº do pedido: " . $row["id_pedido"] . ", " . $row["qtd"] . " " . $row["nome_produto"] . ". Valor total: R$" . $row["qtd"] * $row["valor_unit"] . ". Mensagem anexada: " . $row["msg"] . " </span>
                </div>";
                } else {
                    echo "<div class='formResult'>
                    <span>não há um pedido com esse códido</span>
                </div>";
                }

                ?>

            </div>
    </body>

    </html>


    </html>