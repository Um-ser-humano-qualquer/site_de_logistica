<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleDoMenu.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepgC.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Estoque</title>
</head>

<body class="fundinhoA">

            <div>
            <center><h2 class="texto">Produto</h2></center>
    <nav>
        <div class="barra-superior">
            <a href="profile.php">
                <i class="bi bi-person-circle perfil"></i>
            </a>
        </div>
    </nav>

    <div class="divLoginD">
            <div class="divLogin divLogin-left">
                <h2 class="texto">Produto</h2>
                <form method="post" action="pagina1Aluno.php" id="formcadastro" name="formcadastro" >
                <br>
                <input type="text" name="Placa do caminhão" id="Placa do caminhão" size="20" class="caixaTexto" placeholder="Placa do caminhão"><br />
                <br>
                <input type="text" name="Nome do motorista" id="Nome do motorista" size="20" class="caixaTexto" placeholder="Nome do motorista"><br />
                <br>
                <input type="text" name="Container" id="Container" size="20" class="caixaTexto" placeholder="Container"><br />
                <br>
                <input type="text" name="Navio" id="Navio" size="20" class="caixaTexto" placeholder="Navio"><br/>
                <br>
                <input type="text" name="Cliente" id="Cliente" size="20" class="caixaTexto" placeholder="Cliente"><br/>
                </form>
                <br>
                <center><input type="submit" value="registrar" class="botao"/></center>
                <p></p>
        <div>

            <center><input type="submit" value="registrar" class="botao"/></center>
                <p></p>
            </div>
            </div>
        </div>

            <center><input type="submit" value="registrar" class="botao"/></center>
                <p></p>
            </div>
            <div class="divLogin divLogin-Right">
                <input type="text" name="Tipo" id="Tipo" size="20" class="caixaTexto" placeholder="Tipo"><br/>
                <br>
                <input type="text" name="Lacre" id="Lacre" size="20" class="caixaTexto" placeholder="Lacre"><br/>
                <br>
                <input type="text" name="LacreSIF" id="LacreSIF" size="20" class="caixaTexto" placeholder="Lacre SIF"><br/>
                <br>
                <input type="text" name="Temperatura" id="Temperatura" size="20" class="caixaTexto" placeholder="Temperatura"><br/>
                <br>
                <input type="text" name="IMO" id="IMO" size="20" class="caixaTexto" placeholder="IMO"><br/>
                <br>
                <input type="text" name="N°ONU" id="N°ONU" size="20" class="caixaTexto" placeholder="N°ONU"><br/>
                <center><input type="submit" value="registrar" class="botao"/></center>
                <p></p>
            </div>
        </div>

        
    <?php
        include 'menu.php'
    ?>

</center>

</body>
</html>