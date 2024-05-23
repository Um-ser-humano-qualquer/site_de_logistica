<html lang="en"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepgC.css">
    <link rel="stylesheet" href="css/stylepgV.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


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

    </nav><div class="divMain">
        <div class="divLogin divLogin-left">
            <h2 class="texto">Vistoria e Conferência - Carga </h2>
            
            <form method="POST0" action="processoCarga.php">
            <br>
            <input type="text" name="nota" size="20" class="caixaTexto" placeholder="Nota fiscal"><br>
            <br>
            <input type="text" name="pedido" size="20" class="caixaTexto" placeholder="Pedido de compra">
            <br>
            <br>
            <input type="text" name="doca" size="20" class="caixaTexto" placeholder="Doca"><br>
            <br><input type="submit" class="botao">
</form>
<a href="processoCarga.php">Não tenho um pedido.</a>
</div>        
</div>

<script src="js/popup.js"></script>
</body>
</html>