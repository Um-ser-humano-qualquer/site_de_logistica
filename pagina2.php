<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylepg2.css">
    <link rel="stylesheet" href="css/styleDoMenu.css">
    <link rel="stylesheet" href="css/styleDoBotao.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


</head>

<body>

 <div class="divLogin">

            <h2 class="texto">Vistoria e Conferência - Conteiner </h2>
            <form method="post" action="pagina1Aluno.html" id="formcadastro" name="formcadastro" >
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
            <br>
            <input type="text" name="Tipo" id="Tipo" size="20" class="caixaTexto" placeholder="Tipo"><br/>
            <br>
            <input type="text" name="Lacre" id="Lacre" size="20" class="caixaTexto" placeholder="Lacre"><br/>
            <br>
            <input type="submit" value="registrar" class="botao"/>
            <p></p>

        </form>
        </div>
    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="pagina2.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-columns-gap"></i></span>
                    <span class="txt-link">Armazém</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
                    <span class="txt-link">Agenda</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Perfil</span>
                </a>
            </li>
        </ul>
    
    </nav>

    <script src="js/menu.js"></script>   

        </center>

</body>
</html>