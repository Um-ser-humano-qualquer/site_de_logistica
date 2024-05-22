<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Menu geral</title>
</head>
<body>
    
    <nav>
        <div class="barra-superior">
            <a href="profile.php">
                <i class="bi bi-person-circle perfil"></i>
            </a>
        </div>
    </nav>
    <nav class="menu-lateral"> <!-- menu lateral -->

        <div class="btn-expandir"> <!-- botão para abrir o menu -->
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul> <!-- lista de ícones para acessar outras páginas -->
            <li class="item-menu post"> <!-- ícone home -->
                <a href="pagina1Aluno.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menuu"> <!-- item recebimento e suas sub classes -->
                <details class="item-menuu"> <!-- serve para criar sub itens -->
                    <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                            <span class="icone"><i class="bi bi-columns-gap"></i></span>
                            <span class="txt-linke">Recebimento</span>
                    </summary>
                    <li class="item-menu post"> <!-- sub classe do item recebimento -->
                        <a href="pagina2Aluno.php">
                            <span class="icone"><i class="bi bi-columns-gap"></i></span>
                            <span class="txt-linke">Container</span>
                        </a>
                    </li>
                    <li class="item-menu post"> <!-- sub classe do item recebimento -->
                        <a href="pagina4Aluno.php">
                            <span class="icone"><i class="bi bi-columns-gap"></i></span>
                            <span class="txt-linke">Carga</span>
                        </a>
                    </li>
                </details>
            </li>
            <li class="item-menu post">
                <a href="pagina3Aluno.php">
                    <span class="icon"><i class="bi bi-signpost-2-fill"></i></span>
                    <span class="txt-link">Movimentação</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="">
                    <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
                    <span class="txt-link">Estoque</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="">
                    <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
                    <span class="txt-link">Picking</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="">
                    <span class="icon"><i class="bi bi-clipboard-data-fill"></i></span>
                    <span class="txt-link">Expedição</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="">
                    <span class="icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                    <span class="txt-link">Relatórios</span>
                </a>
            </li>
            <li class="item-menuu"> <!-- item controle e suas sub classes -->
                <details class="item-menuu"> <!-- serve para criar sub itens -->
                    <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                            <span class="icone"><i class="bi bi-pin-map-fill"></i></span>
                            <span class="txt-linke">Controle</span>
                    </summary>
                    <li class="item-menu post"> <!-- sub classe do item controle -->
                        <a href="">
                            <span class="icone"><i class="bi bi-pin-map-fill"></i></span>
                            <span class="txt-linke">Doca</span>
                        </a>
                    </li>
                    <li class="item-menu post"> <!-- sub classe do item controle -->
                        <a href="">
                            <span class="icone"><i class="bi bi-pin-map-fill"></i></span>
                            <span class="txt-linke">Estoque</span>
                        </a>
                    </li>
                </details>
            </li>
        </ul>
    </nav>
<script src="js/menu.js"></script>
</body>
</html>