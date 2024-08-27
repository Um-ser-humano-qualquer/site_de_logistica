<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg9Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Picking2</title>
</head>

<body class="fundinhoA">
    <div class="divMainZ">
        <div class="divLogin-pcd">
            <br>
            <input type="text" name="" size="20" class="caixaTexto" placeholder="Pedido de compra n°" value="0">
            <br />
        </div>
        <div class="divLogin-mpb">
            <h2 class="texto">Produtos do Picking</h2>
            <br>
            <input type="text" name="" size="18" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="18" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="18" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="18" class="caixaTexto" placeholder="">
            <br />
            <br>
        </div>

        <div class="divLogin-clt">
            <center>
                <h2 class="texto">UN</h2>
            </center>
            <br>
            <input type="text" name="" size="2" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="2" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="2" class="caixaTexto" placeholder="">
            <br />
            <br>
            <input type="text" name="" size="2" class="caixaTexto" placeholder="">
            <br />
            <br>
        </div>

        <body class="fundolegal">
            <div class="divLogin-tcc">
                <center>
                    <h2 class="texto">QTD</h2>
                </center>
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
            </div>

            <div class="divLogin-sn">
                <center>
                    <h2 class="texto">POSIÇÃO</h2>
                </center>
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
                <input type="text" name="" size="2" class="caixaTexto" placeholder="">
                <br />
                <br>
            </div>

            <div class="divLogin-pt">
                <br>
                <br>
                <input type="submit" value="Separar" class="votuo">
                <br>
                <input type="submit" value="Separar" class="votuo">
                <br>
                <input type="submit" value="Separar" class="votuo">
                <br>
                <input type="submit" value="Separar" class="votuo">
                <br>
            </div>

            <form action="pagina8Aluno.php" method="POST0">
                <div class="divLogin-bot">
                    <input type="submit" value="Finalizar Pincking" class="botao batu">
                </div>
            </form>
    </div>

    <?php
    include_once("../php/conexao.php");
    include_once ('menuAluno.php');
    

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
</body>

</html>