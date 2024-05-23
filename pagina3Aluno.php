<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<meta charset="UTF-8"> <!-- style's css-->

    <link rel="stylesheet" href="styleDoMenu.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="styleMenu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepgC.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Movimentação</title>
</head>

<body class="fundinhoA">
    <nav> <!-- barra superior -->
        <nav>

            <div class="barra-superior">
                <a href="profile.php">
                    <i class="bi bi-person-circle perfil"></i>
                </a>
            </div>
        </nav>
        
    <div class="divLognV"> <!-- tabela 1 -->
     <div class="divLogin divLogin-lefts">  
            <center><h2 class="texto">Operação em Aberto</h2></center> 
            <br>
            <br>  
                <table border ="1"> 
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="tipo" size="12" class="caixaText" placeholder="Tipo"><br/></td>
                        </tr>
                </table>
                <br>
            </div>
        </div>

    <div class="divLogin divLogin-Rights"> <!-- tabela 2 -->
            <center><h2 class="texto">UN</h2></center> 
            <br> 
            <br>   
                <table border ="1"> 
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                </table>
            </div>
        </div>
    
    <div class="divLogin divLogin-Righ"> <!-- tabela 3 -->
            <center><h2 class="texto">QTD</h2></center> 
            <br> 
            <br>   
                <table border ="1"> 
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                </table>
                </div>
            </div>

    <div class="divLogin divLogin-lef"> <!-- tabela 4 -->
            <center><h2 class="texto">Posição</h2></center> 
            <br> 
            <br>   
                <table border ="1"> 
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="o" size="1" class="caixaText2" placeholder=""><br/></td>
                        </tr>
                </table>
                </div>
            </div>
        
    <div class="divLogin divLogin-let"> <!-- tabela 5 -->  

                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
                        <br><center><input type="submit" value="enviar" class="botao"/></center><p></p>
            </div>

        <nav class="menu-lateral">    
    <?php
        include 'menu.php'
    ?>

</center>
</body>
</html>