<html lang="en"><head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/..stylepgC.css">
    <link rel="stylesheet" href="stylepgV.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Document</title>

    </head>
<body class="fundinho">

    <nav>
        <div class="barra-superior">
            <a href="profile.php">
                <i class="bi bi-person-circle perfil"></i>
            </a>
            
        </div>
    </nav>

    <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="pagina1Aluno.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu ativo">
                <a href="pagina2Aluno.php">
                    <span class="icon"><i class="bi bi-columns-gap"></i></span>
                    <span class="txt-link">Recebimento</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="pagina3Aluno.php">
                    <span class="icon"><i class="bi bi-signpost-2-fill"></i></span>
                    <span class="txt-link">Movimentação</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
                    <span class="txt-link">Estoque</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="">
                    <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
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

    </nav><div class="divMain2">
        <div class="divLogin divLogin-pedido">
            <h2 class="texto">Produtos</h2>
            
            <form method="POST0" action="processoCarga.php">
            <br>
            <input type="text" name="nota" size="28" class="caixaTexto" placeholder="Produto faltando"><br>
            <br>
            <input type="text" name="pedido" size="10" class="caixaTexto" placeholder="Faltando?">
            
            
            <input type="text" name="doca" size="10" class="caixaTexto" placeholder="Avariado?"><br>
            <br><input type="submit" class="botao">
</form>
</div>        
</div>

<script src="js/popup.js"></script>


</body></html>