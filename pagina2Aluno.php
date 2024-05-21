<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="styleDoBotaoGeral.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylepgC.css">
    <meta name="viewport" content="w1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Conteiner</title>


</head>

<body class="fundinho">

    <nav>
        <div class="barra-superior">
            <a href="profile.php">
                <i class="bi bi-person-circle perfil"></i>
            </a>
        </div>
    </nav>

    <div class="divLoginG">
        <div class="divLogin divLogin-left">
            <h2 class="texto">Vistoria e Conferência - Conteiner </h2>
            <form method="POST0" action="processoAlunopg2.php" >
            <br>
            <input type="text" name="placa_caminhao" size="20" class="caixaTexto" placeholder="Placa do caminhão"><br />
            <br>
            <input type="text" name="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista"><br />
            <br>
            <input type="text" name="container" size="20" class="caixaTexto" placeholder="Container"><br />
            <br>
            <input type="text" name="navio" size="20" class="caixaTexto" placeholder="Navio"><br/>
            <br>
            <input type="text" name="cliente" size="20" class="caixaTexto" placeholder="Cliente"><br/>
            <br>
            <input type="text" name="tipo" size="20" class="caixaTexto" placeholder="Tipo"><br/>
            <br>
            <input type="text" name="lacre" size="20" class="caixaTexto" placeholder="Lacre"><br/>
            <br>
            <input type="text" name="lacre_sif" size="20" class="caixaTexto" placeholder="Lacre SIF"><br/>
            <br>
            <input type="text" name="temperatura" size="20" class="caixaTexto" placeholder="Temperatura"><br/>
            <br>
            <input type="text" name="IMO" size="20" class="caixaTexto" placeholder="IMO"><br/>
            <br>
            <input type="text" name="n_onu" size="20" class="caixaTexto" placeholder="N°ONU"><br/>
            
        </div>
        
        <div class="divLogin divLogin-Right">
        <h2 class="texto">Assinale se tiver algum problema: </h2><br>
            <h3><input type="checkbox" name="Conteiner bem desgastado" class="texto">Conteiner bem desgastado</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na lateral direita" class="texto">Avaria na lateral direita</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na lateral esquerda" class="texto">Avaria na lateral esquerda</h3>
            <br>
            <h3><input type="checkbox" name="Avaria no teto"  class="texto">Avaria no teto</h3>
            <br>
            <h3><input type="checkbox" name="Avaria na frente"  class="texto">Avaria na frente</h3>
            <br>
            <h3><input type="checkbox" name="Sem lacre" class="texto">Sem lacre</h3>
            <br>
            <h3><input type="checkbox" name="Adesivos avariados" class="texto">Adesivos avariados</h3>
            <br>
            <h3><input type="checkbox" name="Excesso de altura"  class="texto">Excesso de altura</h3>
            <br>
            <h3><input type="checkbox" name="Excesso na direita"  class="texto">Excesso na direita</h3>
            <br>
            <h3><input type="checkbox" name="Excesso na esquerda"  class="texto">Excesso na esquerda</h3>
            <br>
            <h3><input type="checkbox" name="Excesso frontal" class="texto">Excesso frontal</h3>
            <br>
            <h3><input type="checkbox" name="Painel Avariado" class="texto">Painel Avariado</h3>
            <br>
            <h3><input type="checkbox" name="Sem cabo de energia" class="texto">Painel Avariado</h3>
            <br>
            <h3><input type="checkbox" name="Sem lona" class="texto">Sem lona</h3>
            <br>
           <center><input type="submit" value="registrar" class="botao"/></center>
            <p></p>
        </div>
    </div>
</form>
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
                <a href="pagina3Aluno.php">
                    <span class="icon"><i class="bi bi-signpost-2-fill"></i></span>
                    <span class="txt-link">Movimentação</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="pagina4Aluno.php">
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

        </center>

</body>
</html>