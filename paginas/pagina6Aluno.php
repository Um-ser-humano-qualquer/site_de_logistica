<!DOCTYPE html>
<html lang="pt-br">

<head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylepg6Aluno.css">
        <link rel="stylesheet" href="../css/styleFundo.css">
        <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
        <title>Movimentação</title>
</head>

<body class="fundinhoA">
        <div class="divMainX">
                <div class="divLogin-senhor">
                        <div class="divLogin-meu">
                                <h2 class="texto">Descrição do produto</h2>
                                <br>
                                <?php
                                include_once('../php/conexao.php');
                                $sql = "SELECT * FROM produtos";
                                $resultado = $conexao->query($sql);

                                if ($resultado->num_rows > 0) {
                                        
                                        while ($row = $resultado->fetch_assoc()) {
                                                echo ' <input type="text" name="nome_produto" id="nome_produto" size="20" class="caixaTexto divLogin-amado" value="' . $row['nome_produto'] . '">
                                                <br/>
                                                <br>
                                                
                                </div>

                                <div class="Btable"> <!-- primeira tabela -->
                                        <div class="posicaoTabela">
                                                
                                                <input type="text" class="tableA texto" placeholder="UN" id="un" value="' . $row['UN'] . '">
                                                
                                                <input type="text" class="tableB texto" placeholder="QTD" id="qtd" onkeyup="calcular_preco()">

                                                <input type="text" class="tableC texto" placeholder="R$/UNIT" id="RSunit" value="' . $row['preco'] . '">
                                                
                                                <input type="text" class="tableD texto" placeholder="Total" id="total">     
                                        </div>
                                </div>

                                <div class="over">
                                        <input type="submit" class="sbt-OK" value="OK"></input>
                                        <br>
                                </div>
                        </div>';
                                        }
                                } else {
                                        echo '<div class="">';
                                        echo '<p>Nenhum produto encontrado.</p>';
                                        echo '</div>';
                                }

                                // Fecha a conexão
                                $conexao->close();
                                ?>
                        </div>
                </div>
                <?php
                include 'menuAluno.php'
                ?>
                <script src="../js/calcular_preco.js"></script>
</body>

</html>