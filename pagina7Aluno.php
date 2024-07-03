<html lang="pt-br"><head>
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/stylepgG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
    <title>Movimentação2</title>
</head>

<body class="fundo">
    <div class="divMain2 ">
        <div class="div-mid">
            <div class="texto">
                <input type="text" size="20">
                <br><br>
                <input type="text" size="20">
            </div>
           
            <div class="tabela">
                
                    <div class="Btable">
                        <div class="posicaoTabela">
                            
                                <input type="text" class="tableL texto" placeholder="QNT">
                            
                            
                                <input type="text" class="tableC texto" placeholder="R$/UNIT">
                            
                            
                                <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                            
                        </div>
                    </div>
                

                
    <div class="Line">
       
                    
       </div>
                    <div class="Btable2">
                        <div class="posicaoTabela2">
                            
                                <input type="text" class="tableL texto" placeholder="QNT">
                            
                            
                                <input type="text" class="tableC texto" placeholder="R$/UNIT">
                            
                            
                                <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                            
                        </div>
                    </div>
                

            </div>
        </div>

        <div class="div-ok">
        <br>
        <br>
            <h3>Finalizar</h3>
            <br>
            <br>
            <br>
            <input type="submit" value="OK" class="botao">
            <br>
            <input type="submit" value="OK" class="botao">
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="voltar" class="botao">
        </div>

    </div>
    

    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styleMenu.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

      
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
                        <li class="item-menu post position"> <!-- sub classe do item recebimento -->
                            <a href="pagina2Aluno.php">
                                <span class="icone"><i class="bi bi-box"></i></span>
                                <span class="txt-linke">Container</span>
                            </a>
                        </li>
                        <li class="item-menu post position"> <!-- sub classe do item recebimento -->
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
                    <a href="pagina8Aluno.php">
                        <span class="icon"><i class="bi bi-box-seam-fill"></i></span>
                        <span class="txt-link">Estoque</span>
                    </a>
                </li>
                <li class="item-menu post">
                    <a href="pagina9Aluno.php">
                        <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                        <span class="txt-link">Picking</span>
                    </a>
                </li>
                <li class="item-menuu"> <!-- item recebimento e suas sub classes -->
                    <details class="item-menuu"> <!-- serve para criar sub itens -->
                        <summary> <!-- serve para nomear o item da lista e colocar o ícone -->
                            <span class="icone"><i class="bi bi-globe2"></i></span>
                            <span class="txt-linke">Expedição</span>
                        </summary>
                        <li class="item-menu post position"> <!-- sub classe do item recebimento -->
                            <a href="pagina11Aluno.php">
                                <span class="icone"><i class="bi bi-arrow-right-square"></i></span>
                                <span class="txt-linke">Solicitação</span>
                            </a>
                        </li>
                        <li class="item-menu post position"> <!-- sub classe do item recebimento -->
                            <a href="pagina13Aluno.php">
                                <span class="icone"><i class="bi bi-boxes"></i></span>
                                <span class="txt-linke">Carga</span>
                            </a>
                        </li>
                    </details>
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
                        <li class="item-menu post position"> <!-- sub classe do item controle -->
                            <a href="pagina14Aluno.php">
                                <span class="icone"><i class="bi bi-dpad-fill"></i></span>
                                <span class="txt-linke">Doca</span>
                            </a>
                        </li>
                        <li class="item-menu post position"> <!-- sub classe do item controle -->
                            <a href="pagina16Aluno.php">
                                <span class="icone"><i class="bi bi-box2-fill"></i></span>
                                <span class="txt-linke">Estoque</span>
                            </a>
                        </li>
                        <li class="item-menu post position"> <!-- sub classe do item controle -->
                            <a href="pagina18Aluno.php">
                                <span class="icone"><i class="bi bi-book-fill"></i></span>
                                <span class="txt-linke">Solicitações</span>
                            </a>
                        </li>
                    </details>
                </li>
            </ul>
        </nav>
        <script src="js/menu.js"></script>
    



</body></html>