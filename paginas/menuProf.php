<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styleMenu.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
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
                    <div class="inline">
                        <input type="submit" class="sair" value="Sair"><i class="bi bi-box-arrow-right SAIR"></i>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="menu-lateral"> <!-- menu lateral -->
            <div class="btn-expandir"> <!-- botão para abrir o menu -->
                <i class="bi bi-list" id="btn-exp"></i>
            </div>
            <ul> <!-- lista de ícones para acessar outras páginas -->
                <li class="item-menu post"> <!-- ícone home -->
                    <a href="pagina1Prof.php">
                        <span class="icon"><i class="bi bi-house-fill"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menuu"> <!-- item recebimento e suas sub classes -->
                    <details class="item-menuu"> <!-- serve para criar sub itens -->
                        <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                            <span class="icone"><i class="bi bi-vector-pen"></i></span>
                            <span class="txt-linke">Informação</span>
                        </summary>
                        <li class="item-menu post position txt-top"> <!-- sub classe do item recebimento -->
                            <a href="pagina5Prof.php">
                                <span class="icone"><i class="bi bi-currency-dollar"></i></span>
                                <span class="txt-linke">Compra</span>
                            </a>
                        </li>
                        <li class="item-menu post position txt-bottom"> <!-- sub classe do item recebimento -->
                            <a href="pagina2Prof.php">
                                <span class="icone"><i class="bi bi-currency-exchange"></i></span>
                                <span class="txt-linke">Venda</span>
                            </a>
                        </li>
                    </details>
                </li>
                <li class="item-menu post">
                    <a href="pagina3Prof.php">
                        <span class="icon"><i class="bi bi-unlock-fill"></i></span>
                        <span class="txt-link">Senhas</span>
                    </a>
                </li>
                <li class="item-menu post">
                    <a href="pagina4Prof.php">
                        <span class="icon"><i class="bi bi-backpack2"></i></span>
                        <span class="txt-link">Estudantes</span>
                    </a>
                </li>
                <li class="item-menu post"> <!-- sub classe do item controle -->
                    <a href="pagina7Prof.php">
                        <span class="icon"><i class="bi bi-trash-fill"></i></span>
                        <span class="txt-link">Descarte</span>
                    </a>
                </li>
            </ul>
        </nav>
        <script src="../js/menu.js"></script>
    </body>
</html>