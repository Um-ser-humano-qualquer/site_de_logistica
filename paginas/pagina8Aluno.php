<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylepg8Aluno.css">
        <link rel="stylesheet" href="../css/styleFundo.css">
        <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
        <title>Estoque</title>
    </head>
    
    <body class="findo">

        <div class="divEstoque">
            <div class="inline margin-bottom">
                <h1 class="margin-right">Filtros</h1>
                <h1>Posições</h1>
            </div>
            <div class="inline">
                <div class="divEstoque1">
                    <input type="text" name="Produtos" size="20" class="posicaoEstoque" placeholder="Produtos">
                    <br>
                    <input type="text" name="UN" size="20" class="posicaoEstoque" placeholder="UN">
                    <br>
                    <input type="text" name="QTD" size="20" class="posicaoEstoque" placeholder="QTD">
                </div>
                <table class="divEstoque2">
                    <tr>
                        <th class="">
                            <input type="submit" value="A1" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="A2" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="A3" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="A4" class="btn-estoque">
                        </th>
                    </tr>
                    <tr>
                        <th class="">
                            <input type="submit" value="B1" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="B2" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="B3" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="B4" class="btn-estoque">
                        </th>
                    </tr>
                    <tr>
                        <th class="">
                            <input type="submit" value="C1" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="C2" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="C3" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="C4" class="btn-estoque">
                        </th>
                    </tr>
                    <tr>
                        <th class="">
                            <input type="submit" value="D1" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="D2" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="D3" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="D4" class="btn-estoque">
                        </th>
                    </tr>
                    <tr>
                        <th class="">
                            <input type="submit" value="E1" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="E2" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="E3" class="btn-estoque">
                        </th>
                        <th class="">
                            <input type="submit" value="E4" class="btn-estoque">
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <?php 
            include 'menuAluno.php'
        ?>
    </body>
</html>