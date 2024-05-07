<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="styleDoMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>

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
</body>
</html>