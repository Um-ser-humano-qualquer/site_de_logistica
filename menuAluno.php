 
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
                        <li class="item-menu post"> <!-- sub classe do item recebimento -->
                            <a href="pagina2Aluno.php">
                                <span class="icone"><i class="bi bi-box"></i></span>
                                <span class="txt-linke">Container</span>
                            </a>
                        </li>
                        <li class="item-menu post"> <!-- sub classe do item recebimento -->
                            <a href="pagina4Aluno.php">
                                <span class="icone"><i class="bi bi-boxes"></i></span>
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
                    <a href="pagina7Aluno.php">
                        <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
                        <span class="txt-link">Estoque</span>
                    </a>
                </li>
                <li class="item-menu post">
                    <a href="">
                        <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                        <span class="txt-link">Picking</span>
                    </a>
                </li>
                <li class="item-menu post">
                    <a href="">
                        <span class="icon"><i class="bi bi-globe2"></i></span>
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
                                <span class="icone"><i class="bi bi-dpad-fill"></i></span>
                                <span class="txt-linke">Doca</span>
                            </a>
                        </li>
                        <li class="item-menu post"> <!-- sub classe do item controle -->
                            <a href="">
                                <span class="icone"><i class="bi bi-box2-fill"></i></span>
                                <span class="txt-linke">Estoque</span>
                            </a>
                        </li>
                    </details>
                </li>
            </ul>
        </nav>
        <script src="js/menu.js"></script>
