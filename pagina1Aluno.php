<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="styleDoMenu.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body class= "fundinho2">

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
            <li class="item-menu ativo">
                <a href="">
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

    </nav>

    <script src="js/menu.js"></script>
</body>
</html>