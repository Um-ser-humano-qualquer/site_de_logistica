<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav>
        <div class="barra-superior">
        </div>
        <i class="bi bi-person-circle perfil" onclick="handlePopup(true)"></i>
        <div class="popup" id="popup">
            <i class="bi bi-x-lg close" type="submit" onclick="handlePopup(false)"></i>
            <div class="popup2">
                <i class="bi bi-person-circle profile"></i>
                <br>
                <input type="text" class="caixaDeTexto" value="Usuário: ">
                <br>
                <input type="text" class="caixaDeTexto" value="Turma: ">
                <br>
                <form action="../index.php">
                    <input type="submit" class="sair" value="Sair"><i class="bi bi-box-arrow-right SAIR"></i>
                </form>
            </div>
        </div>
    </nav>
    <nav class="menu-lateral"> <!-- menu lateral -->
        <div class="btn-expandir"> <!-- botão para abrir o menu -->
            <i class="bi bi-list" id="btn-exp"></i>
        </div>
        <ul> <!-- lista de ícones para acessar outras páginas -->
            <li class="item-menu post"> <!-- ícone home -->
                <a href="pagina1Aluno.php">
                    <span class="icon"><i class="bi bi-house-fill"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menuu"> <!-- item recebimento e suas sub classes -->
                <details class="item-menuu"> <!-- serve para criar sub itens -->
                    <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                        <span class="icone"><i class="bi bi-grid-3x3-gap-fill"></i></span>
                        <span class="txt-linke">Recebimento</span>
                    </summary>
            <li class="item-menu sim post position txt-top"> <!-- sub classe do item recebimento -->
                <a href="pagina2Aluno.php">
                    <span class="icone"><i class="bi bi-truck"></i></span>
                    <span class="txt-linke">Transporte</span>
                </a>
            </li>
            <li class="item-menu iten-menuu post position txt-bottom"> <!-- sub classe do item recebimento -->
                <a href="pagina3Aluno.php">
                    <span class="icone"><i class="bi bi-boxes"></i></span>
                    <span class="txt-linke">Carga</span>
                </a>
            </li>
            </details>
            </li>
            <li class="item-menu post">
                <a href="pagina6Aluno.php">
                    <span class="icon"><i class="bi bi-signpost-2-fill"></i></span>
                    <span class="txt-link">Movimentação</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="pagina10Aluno.php">
                    <span class="icon"><i class="bi bi-currency-dollar"></i></span>
                    <span class="txt-link">Venda</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="pagina7Aluno.php">
                    <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
                    <span class="txt-link">Estoque</span>
                </a>
            </li>
            <li class="item-menu post">
                <a href="pagina8Aluno.php">
                    <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                    <span class="txt-link">Picking</span>
                </a>
            </li>
            <li class="item-menuu post"> <!-- item recebimento e suas sub classes -->
                <details class="item-menuu"> <!-- serve para criar sub itens -->
                    <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                        <span class="icone"><i class="bi bi-globe2"></i></span>
                        <span class="txt-linke">Expedição</span>
                    </summary>
            <li class="item-menu post position txt-top"> <!-- sub classe do item recebimento -->
                <a href="pagina13Aluno.php">
                    <span class="icone"><i class="bi bi-arrow-right-square"></i></span>
                    <span class="txt-linke">Solicitação</span>
                </a>
            </li>
            <li class="item-menu post position txt-bottom"> <!-- sub classe do item recebimento -->
                <a href="pagina11Aluno.php">
                    <span class="icone"><i class="bi bi-dpad-fill"></i></span>
                    <span class="txt-linke">Docas</span>
                </a>
            </li>
            </details>
            </li>
            <li class="item-menu post">
                <a href="pagina14Aluno.php">
                    <span class="icon"><i class="bi bi-file-earmark-text-fill"></i></span>
                    <span class="txt-link">Romaneio</span>
                </a>
            </li>
        </ul>
    </nav>
    <script src="../js/menu.js"></script>
</body>

</html>