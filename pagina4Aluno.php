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
    <link rel="stylesheet" href="stylepgA.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Carga</title>
</head>

<body class="fundinhoB">

        <div>

    <nav> <!--barra superior-->
        <div class="barra-superior">
            <a href="profile.php">
                <i class="bi bi-person-circle perfil"></i>
            </a>
        </div>
    </nav>

    <div class="divLoginE"> <!-- tela 1 fundo-->
     <div class="divlogin divLogin-mit"> <!-- tela 2 fundo-->

     <div class="divlogin divLogin-tig">
       <h1 class="texto">Produtos</h1>
     </div>

       <div class="divlogin divLogin-rig">
            <input type="text" name="  Produto_faltando" size="30" class="caixaTexto" placeholder="Produto faltando"><br />
       </div>
                <table border ="1" class="divlogin divLogin-mith">  <!-- primira tabela-->
                        <tr>
                            <td><input type="text" name="UN" size="20" class="caixaText3" placeholder=" UN"><br/></td>
                            <td><input type="text" name="QTD" size="20" class="caixaText3" placeholder=" QTD"><br/></td>
                        </tr> 
                        <tr>
                            <td><input type="text" name="R$/UNIT" size="20" class="caixaText3" placeholder=" R$/UNIT"><br/></td>
                            <td><input type="text" name="R$ TOTAL" size="20" class="caixaText3" placeholder=" R$ TOTAL"><br/></td>  
                        </tr>   
                </table>
    
       <div class="divlogin divLogin-big">
            <input type="text" name="  Produto_faltando" size="30" class="caixaTexto" placeholder="Produto faltando"><br />
       </div>

        <div class="divlogin divLogin-vira">
                <input type="text" name="Faltando" size="10" class="caixaTexto" placeholder="Faltando?"><br />
        </div>

        <div class="divlogin divLogin-vita">
                <input type="text" name="Avariado" size="10" class="caixaTexto" placeholder="Avariado?"><br />
        </div>

        <div class="divlogin divLogin-tira">
                <input type="text" name="Avariado" size="10" class="caixaTexto" placeholder="Avariado?"><br />
        </div>

        <div class="divlogin divLogin-vina">
                <input type="text" name="Faltando" size="10" class="caixaTexto" placeholder="Faltando?"><br />
        </div>

        <div class="divlogin divLogin-rigth"> <!-- segunda tabela-->
            <table border ="1"> 
                            <tr>
                                <td><input type="text" name="UN" size="16" class="caixaText" placeholder=" UN"><br/></td>
                                <td><input type="text" name="QTD" size="16" class="caixaText" placeholder=" QTD"><br/></td>
                                <td><input type="text" name="R$/UNIT" size="16" class="caixaText" placeholder=" R$/UNIT"><br/></td>
                                <td><input type="text" name="R$ TOTAL" size="16" class="caixaText" placeholder=" R$ TOTAL"><br/></td>
                            </tr>     
                    </table>
                </div>
            </div>
    </div>
        <nav class="menu-lateral">

<div class="btn-expandir">
    <i class="bi bi-list" id="btn-exp"></i>
</div>

<ul> <!-- menu -->
    <li class="item-menu">
        <a href="pagina1Aluno.php">
            <span class="icon"><i class="bi bi-house"></i></span>
            <span class="txt-link">Home</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="pagina2Aluno.php">
            <span class="icon"><i class="bi bi-columns-gap"></i></span>
            <span class="txt-link">Recebimento</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="pagina3aluno.php">
            <span class="icon"><i class="bi bi-signpost-2-fill"></i></span>
            <span class="txt-link">Movimentação</span>
        </a>
    </li>
    <li class="item-menu ativo">
        <a href="pagina4Aluno.php">
            <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
            <span class="txt-link">Estoque</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="">
            <span class="icon"><i class="bi bi-stack"></i></span>
            <span class="txt-link">Picking</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="">
            <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
            <span class="txt-link">Expedição</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="">
            <span class="icon"><i class="bi bi-file-earmark-text-fill"></i></span>
            <span class="txt-link">Relatórios</span>
        </a>
    </li>
    <li class="item-menu">
        <a href="">
            <span class="icon"><i class="bi bi-pin-map-fill"></i></span>
            <span class="txt-link">Controle</span>
        </a>
    </li>
</ul>

</nav>

<script src="js/menu.js"></script> 

</center>

</body>
</html>