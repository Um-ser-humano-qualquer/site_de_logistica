<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg9Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Picking</title>
</head>

<body class="fundolegal">

    <div class="divMain">

        <center>
            <h2 class="texto">Escolha de Picking</h2>
        </center>
        <div class="Line">



        </div>

        <br>
        <br>
        <div class="BlueBlock">
            <form action="pagina9Aluno.php" method="POST">
                <input type="text" name="soli1" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
                <br>
                <br>
                <input type="text" name="soli2" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
                <br>
                <br>
                <input type="text" name="soli3" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
                <br>
                <br>
                <input type="text" name="soli4" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
                <br>
                <br>
                <input type="text" name="soli5" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
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
                    <span>id: " . $row["id_pedido"] . " produto: " . $row["nome_produto"] . " quantidade: " . $row["qtd"] . " total: " . $row["valor_total"] . " mensagem: " . $row["msg"] . " </span>
                </div>";
        } else {
            echo "<div class='formResult'>
                    <span>não há um pedido com esse códido</span>
                </div>";
        }

        ?>

    </div>
    <?php
    include 'MenuAluno.php'
    ?>
</body>

</html>