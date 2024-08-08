<?php
include 'menuAluno.php';
include '../php/Alunopg8.php'
?>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg8Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Estoque</title>
</head>

<body class="findo">

    <div class="divEstoque">
        <div class="inline margin-bottom">
            <h1 class="margin-right">Filtros</h1>
            <h1>Posições</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="inline">

                <div class="divEstoque1">
                    <input type="text" name="Produtos" size="20" class="posicaoEstoque" placeholder="Produtos">
                    <br>
                    <input type="text" name="UN" size="20" class="posicaoEstoque" placeholder="UN">
                    <br>
                    <input type="text" name="QTD" size="20" class="posicaoEstoque" placeholder="QTD">
                </div>
                <table class="divEstoque2">
                    <tr>
                        <th>
                            <div class="popupA1 btn-estoque" onmousedown="popupA1()">
                                <p class="botaoPosicao texto">A1</p>
                                <span type="submit" class="popuptextA1" id="myPopupA1"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupA2 btn-estoque" onmousedown="popupA2()">
                                <p class="botaoPosicao texto">A2</p>
                                <span type="submit" class="popuptextA2" id="myPopupA2"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupA3 btn-estoque" onmousedown="popupA3()">
                                <p class="botaoPosicao texto">A3</p>
                                <span type="submit" class="popuptextA3" id="myPopupA3"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupA4 btn-estoque" onmousedown="popupA4()">
                                <p class="botaoPosicao texto">A4</p>
                                <span type="submit" class="popuptextA4" id="myPopupA4"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupA5 btn-estoque" onmousedown="popupA5()">
                                <p class="botaoPosicao texto">A5</p>
                                <span type="submit" class="popuptextA5" id="myPopupA5"></span>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div class="popupB1 btn-estoque" onmousedown="popupB1()">
                                <p class="botaoPosicao texto">B1</p>
                                <span type="submit" class="popuptextB1" id="myPopupB1"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupB2 btn-estoque" onmousedown="popupB2()">
                                <p class="botaoPosicao texto">B2</p>
                                <span type="submit" class="popuptextB2" id="myPopupB2"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupB3 btn-estoque" onmousedown="popupB3()">
                                <p class="botaoPosicao texto">B3</p>
                                <span type="submit" class="popuptextB3" id="myPopupB3"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupB4 btn-estoque" onmousedown="popupB4()">
                                <p class="botaoPosicao texto">B4</p>
                                <span type="submit" class="popuptextB4" id="myPopupB4"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupB5 btn-estoque" onmousedown="popupB5()">
                                <p class="botaoPosicao texto">B5</p>
                                <span type="submit" class="popuptextB5" id="myPopupB5"></span>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div class="popupC1 btn-estoque" onmousedown="popupC1()">
                                <p class="botaoPosicao texto">C1</p>
                                <span type="submit" class="popuptextC1" id="myPopupC1"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupC2 btn-estoque" onmousedown="popupC2()">
                                <p class="botaoPosicao texto">C2</p>
                                <span type="submit" class="popuptextC2" id="myPopupC2"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupC3 btn-estoque" onmousedown="popupC3()">
                                <p class="botaoPosicao texto">C3</p>
                                <span type="submit" class="popuptextC3" id="myPopupC3"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupC4 btn-estoque" onmousedown="popupC4()">
                                <p class="botaoPosicao texto">C4</p>
                                <span type="submit" class="popuptextC4" id="myPopupC4"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupC5 btn-estoque" onmousedown="popupC5()">
                                <p class="botaoPosicao texto">C5</p>
                                <span type="submit" class="popuptextC5" id="myPopupC5"></span>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <div class="popupD1 btn-estoque" onmousedown="popupD1()">
                                <p class="botaoPosicao texto">D1</p>
                                <span type="submit" class="popuptextD1" id="myPopupD1"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupD2 btn-estoque" onmousedown="popupD2()">
                                <p class="botaoPosicao texto">D2</p>
                                <span type="submit" class="popuptextD2" id="myPopupD2"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupD3 btn-estoque" onmousedown="popupD3()">
                                <p class="botaoPosicao texto">D3</p>
                                <span type="submit" class="popuptextD3" id="myPopupD3"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupD4 btn-estoque" onmousedown="popupD4()">
                                <p class="botaoPosicao texto">D4</p>
                                <span type="submit" class="popuptextD4" id="myPopupD4"></span>
                            </div>
                        </th>
                        <th>
                            <div class="popupD5 btn-estoque" onmousedown="popupD5()">
                                <p class="botaoPosicao texto">D5</p>
                                <span type="submit" class="popuptextD5" id="myPopupD5"></span>
                            </div>
                        </th>
                    </tr>
                </table>
            </div>
        <input type="submit" value="Gerar endereço" class="botao botao-posicao">
    </div>
    </form>
    <div class="legenda inline">
        <div class="popupLARANJA btn-estoque-YEAH laranja" onclick="popupLARANJA()">
            <p class="botaoPosicaoo texto">i</p>
            <span type="submit" class="popuptextLARANJA" id="myPopupLARANJA">O Produto pesquisado não consta no banco de dados.</span>
        </div>
        <div class="popupLARANJA2 btn-estoque-YEAH laranja2 empurra" onclick="popupLARANJA2()">
            <p class="botaoPosicaoo texto">i</p>
            <span type="submit" class="popuptextLARANJA2" id="myPopupLARANJA2">Quantidade insuficiente.</span>
        </div>
        <div class="popupCIANO btn-estoque-YEAH ciano empurra" onclick="popupCIANO()">
            <p class="botaoPosicaoo texto">i</p>
            <span type="submit" class="popuptextCIANO" id="myPopupCIANO">Quantidade exata.</span>
        </div>
        <div class="popupAZUL btn-estoque-YEAH azul empurra" onclick="popupAZUL()">
            <p class="botaoPosicaoo texto">i</p>
            <span type="submit" class="popuptextAZUL" id="myPopupAZUL">Quantidade a mais.</span>
        </div>
    </div>

    <script src="../js/popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>