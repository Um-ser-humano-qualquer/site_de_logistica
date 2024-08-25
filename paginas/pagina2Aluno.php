<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepg2Aluno.css">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <meta name="viewport" content="w1.0">
    <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
    <title>Container</title>
</head>

<body class="fundinhoB">
    <div class="divLoginG">
        <form method="POST" action="../php/processoAlunopg2.php">

            <div class="divLogin divLogin-left">
                <h2 class="texto">Vistoria e Conferência</h2>
                <br>
                <input type="text" name="cliente" size="20" class="caixaTexto" placeholder="Cliente" required>
                <br />
                <br>
                <input type="text" name="placa" size="20" class="caixaTexto" placeholder="Placa do caminhão" required>
                <br />
                <br>
                <input type="text" name="carga" size="20" class="caixaTexto" placeholder="Carga" required>
                <br />
                <br>
                <input type="text" name="transporte" size="20" class="caixaTexto" placeholder="Transporte" required>
                <br />
                <br>
                <input type="text" name="nome_motorista" size="20" class="caixaTexto" placeholder="Nome do motorista" required>
                <br />
                <br>
                <input type="text" name="tipo" size="20" class="caixaTexto" placeholder="Tipo" required>
                <br />
                <br>
                <input type="text" name="lacre" size="20" class="caixaTexto" placeholder="Lacre" required>
                <br />
                <br>
                <input type="text" name="lacreSif" size="20" class="caixaTexto0" placeholder="Lacre SIF">
                <br />
                <br>
                <input type="text" name="NOnu" size="20" class="caixaTexto0" placeholder="N°ONU">
                <br />
                <br>
                <input type="text" name="temperatura" size="20" class="caixaTexto0" placeholder="Temperatura">
                <br />
                <br>
                <input type="text" name="IMO" size="20" class="caixaTexto0" placeholder="IMO">
                <br />

            </div>
            <div class="divLogin divLogin-Right">
                <h2 class="texto posicaaao">Assinale se tiver algum problema:</h2>
                <br>
                <h3><input type="checkbox" name="sem lona" id="sem lona" class="texto">Sem lona</h3>
                <br>
                <h3><input type="checkbox" name="container_desgastado" id="container_desgastado" class="texto">Container bem desgastado</h3>
                <br>
                <h3><input type="checkbox" name="avaria_lateral_direita" id="avaria_lateral_direita" class="texto">Avaria na lateral direita</h3>
                <br>
                <h3><input type="checkbox" name="avaria_lateral_esquerda" id="avaria_lateral_esquerda" class="texto">Avaria na lateral esquerda</h3>
                <br>
                <h3><input type="checkbox" name="avaria_teto" id="avaria_teto" class="texto">Avaria no teto</h3>
                <br>
                <h3><input type="checkbox" name="avaria_frente" id="avaria_frente" class="texto">Avaria na frente</h3>
                <br>
                <h3><input type="checkbox" name="sem_lacre" id="sem_lacre" class="texto">Sem lacre</h3>
                <br>
                <h3><input type="checkbox" name="adesivos_avariados" id="adesivos_avariados" class="texto">Adesivos avariados</h3>
                <br>
                <h3><input type="checkbox" name="excesso_altura" class="texto">Excesso de altura</h3>
                <br>
                <h3><input type="checkbox" name="excesso_direita" class="texto">Excesso na direita</h3>
                <br>
                <h3><input type="checkbox" name="excesso_na_esquerda" class="texto">Excesso na esquerda</h3>
                <br>
                <h3><input type="checkbox" name="excesso_frontal" class="texto">Excesso frontal</h3>
                <br>
                <h3><input type="checkbox" name="painel_avariado" class="texto">Painel Avariado</h3>
                <br>
                <h3><input type="checkbox" name="sem_cabo_energia" class="texto">Sem cabo de energia</h3>
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