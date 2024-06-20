<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styleMenu.css">
        <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/stylepgC.css">
        <meta name="viewport" content="w1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    
        <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
        <title>Container</title>
    </head>

    <body class="fundo">
        <div class="divLoginG">
        <form method="POST0" action="processoAlunopg2.php">
            <div class="divLogin divLogin-left">
                <h2 class="texto">Vistoria e Conferência - Container</h2>
                    <br>
                        <input type="text" name="cliente" size="20" class="caixaTexto" placeholder="Cliente">
                    <br/>
                    <br>
                        <input type="text" name="placa" size="20" class="caixaTexto" placeholder="Placa do caminhão">
                    <br/>
                    <br>
                        <input type="text" name="container" size="20" class="caixaTexto" placeholder="Container">
                    <br/>
                    <br>
                        <input type="text" name="navio" size="20" class="caixaTexto" placeholder="Navio">
                    <br/>
                    <br>
                        <input type="text" name="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista">
                    <br/>
                    <br>
                        <input type="text" name="tipo" size="20" class="caixaTexto" placeholder="Tipo">
                    <br/>
                    <br>
                        <input type="text" name="lacre" size="20" class="caixaTexto" placeholder="Lacre">
                    <br/>
                    <br>
                        <input type="text" name="lacre_sif" size="20" class="caixaTexto" placeholder="Lacre SIF">
                    <br/>
                    <br>
                        <input type="text" name="temperatura" size="20" class="caixaTexto" placeholder="Temperatura">
                    <br/>
                    <br>
                        <input type="text" name="IMO" size="20" class="caixaTexto" placeholder="IMO">
                    <br/>
                    <br>
                        <input type="text" name="n_onu" size="20" class="caixaTexto" placeholder="N°ONU">
                    <br/> 
            </div>
            <div class="divLogin divLogin-Right">
                <h2 class="texto">Assinale se tiver algum problema:</h2>
                <br>
                <h3><input type="checkbox" name="Container bem desgastado" class="texto">Container bem desgastado</h3>
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
                <h3><input type="checkbox" name="Sem cabo de energia" class="texto">Sem cabo de energia</h3>
                <br>
                <h3><input type="checkbox" name="Sem lona" class="texto">Sem lona</h3>
                <br>
                <center><input type="submit" value="registrar" class="botao"></center>
            </div>
        </form>
        </div>
        <?php
            include 'menuAluno.php'
        ?>
    </body>
</html>