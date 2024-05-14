<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleDoMenu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepgC.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


</head>

<body class="fundinho">

    <div class="divLoginG">
        <div class="divLogin divLogin-left">
            <h2 class="texto">Vistoria e Conferência - Conteiner </h2>
            <form method="POST0" action="processoAluno2pg.php" >
            <br>
            <input type="text" name="placa_caminhao" id="placa_caminhao" size="20" class="caixaTexto" placeholder="Placa do caminhão"><br />
            <br>
            <input type="text" name="nome_motorista" id="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista"><br />
            <br>
            <input type="text" name="container" id="container" size="20" class="caixaTexto" placeholder="Container"><br />
            <br>
            <input type="text" name="navio" id="navio" size="20" class="caixaTexto" placeholder="Navio"><br/>
            <br>
            <input type="text" name="cliente" id="cliente" size="20" class="caixaTexto" placeholder="Cliente"><br/>
            <br>
            <input type="text" name="tipo" id="tipo" size="20" class="caixaTexto" placeholder="Tipo"><br/>
            <br>
            <input type="text" name="lacre" id="lacre" size="20" class="caixaTexto" placeholder="Lacre"><br/>
            <br>
            <input type="text" name="lacre_sif" id="lacre_sif" size="20" class="caixaTexto" placeholder="Lacre SIF"><br/>
            <br>
            <input type="text" name="temperatura" id="tmperatura" size="20" class="caixaTexto" placeholder="Temperatura"><br/>
            <br>
            <input type="text" name="IMO" id="IMO" size="20" class="caixaTexto" placeholder="IMO"><br/>
            <br>
            <input type="text" name="n_onu" id="n_onu" size="20" class="caixaTexto" placeholder="N°ONU"><br/>
            
        </div>
        
        <div class="divLogin divLogin-Right">
        <h2 class="texto">Assinale se tiver algum problema: </h2><br>
            <h3><input type="checkbox" name="Conteiner bem desgastado" id="Conteiner bem desgastado" class="texto">Conteiner bem desgastado</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na lateral direita" id="Avaria na lateral direita" class="texto">Avaria na lateral direita</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na lateral esquerda" id="Avaria na lateral esquerda" class="texto">Avaria na lateral esquerda</h3>
            <br>
            <h3><input type="checkbox" name="Avaria no teto" id="Avaria no teto" class="texto">Avaria no teto</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na frente" id="Avaria na frente" class="texto">Avaria na frente</h3>
            <br>
            <h3><input type="checkbox" name="Sem lacre" id="Sem lacre" class="texto">Sem lacre</h3>
            <br>
            <h3><input type="checkbox" name="Adesivos avariados" id="Adesivos avariados" class="texto">Adesivos avariados</h3>
            <br>
            <h3><input type="checkbox" name="Excesso de altura" id="Excesso de altura" class="texto">Excesso de altura</h3>
            <br>
            <h3><input type="checkbox" name="Excesso na direita" id="Excesso na direita" class="texto">Excesso na direita</h3>
            <br>
            <h3><input type="checkbox" name="Excesso na esquerda" id="Excesso na esquerda" class="texto">Excesso na esquerda</h3>
            <br>
            <h3><input type="checkbox" name="Excesso frontal" id="Excesso frontal" class="texto">Excesso frontal</h3>
            <br>
            <h3><input type="checkbox" name="Painel Avariado" id="Painel Avariado" class="texto">Painel Avariado</h3>
            <br>
            <h3><input type="checkbox" name="Sem cabo de energia" id="Painel Avariado" class="texto">Painel Avariado</h3>
            <br>
            <h3><input type="checkbox" name="Sem lona" id="Sem lona" class="texto">Sem lona</h3>
            <br>
           <center><input type="submit" value="registrar" class="botao"/></center>
            <p></p>
        </div>
    </div>
</form>
        <nav class="menu-lateral">

        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul> <!-- menu -->
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
                <a href="pagina3aluno.php">
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

        </center>

</body>
</html>