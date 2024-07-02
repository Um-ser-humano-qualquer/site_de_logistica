<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="css/styleDoBotaoGeral.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepgC.css">
    <meta name="situacao[]" value="viewport" content="w1.0">
    <meta name="situacao[]" value="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
    <title>Container</title>
</head>

<body class="fundo">
    <div class="divLoginG">
        <form method="POST" action="php/processoAlunopg2.php">

            <div class="divLogin divLogin-left">
                <h2 class="texto">Vistoria e Conferência - Container</h2>
                <br>
                <input type="text" name="situacao[]" value="cliente" size="20" class="caixaTexto" placeholder="Cliente">
                <br />
                <br>
                <input type="text" name="situacao[]" value="placa" size="20" class="caixaTexto" placeholder="Placa do caminhão">
                <br />
                <br>
                <input type="text" name="situacao[]" value="container" size="20" class="caixaTexto" placeholder="Container">
                <br />
                <br>
                <input type="text" name="situacao[]" value="navio" size="20" class="caixaTexto" placeholder="Navio">
                <br />
                <br>
                <input type="text" name="situacao[]" value="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista">
                <br />
                <br>
                <input type="text" name="situacao[]" value="tipo" size="20" class="caixaTexto" placeholder="Tipo">
                <br />
                <br>
                <input type="text" name="situacao[]" value="lacre" size="20" class="caixaTexto" placeholder="Lacre">
                <br />
                <br>
                <input type="text" name="situacao[]" value="lacre Sif" size="20" class="caixaTexto" placeholder="Lacre SIF">
                <br />
                <br>
                <input type="text" name="situacao[]" value="NOnu" size="20" class="caixaTexto" placeholder="N°ONU">
                <br />
                <br>
                <input type="text" name="situacao[]" value="temperatura" size="20" class="caixaTexto" placeholder="Temperatura">
                <br />
                <br>
                <input type="text" name="situacao[]" value="IMO" size="20" class="caixaTexto" placeholder="IMO">
                <br />

            </div>
            <div class="divLogin divLogin-Right">
                <h2 class="texto">Assinale se tiver algum problema:</h2>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="sem_lona" class="texto">Sem lona</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="container_desgastado" class="texto">Container bem desgastado</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="avaria_lateral_direita" class="texto">Avaria na lateral direita</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="avaria_lateral_esquerda" class="texto">Avaria na lateral esquerda</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="avaria_teto" class="texto">Avaria no teto</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="avaria_frente" class="texto">Avaria na frente</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="sem_lacre" class="texto">Sem lacre</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="adesivos_avariados" class="texto">Adesivos avariados</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="excesso_altura" class="texto">Excesso de altura</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="excesso_direita" class="texto">Excesso na direita</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="excesso_na_esquerda" class="texto">Excesso na esquerda</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="excesso_frontal" class="texto">Excesso frontal</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="painel_avariado" class="texto">Painel Avariado</h3>
                <br>
                <h3><input type="checkbox" name="situacao[]" value="sem_cabo_energia" class="texto">Sem cabo de energia</h3>
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