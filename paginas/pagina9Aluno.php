<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="w1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylepg9Aluno.css">
        <link rel="stylesheet" href="../css/styleFundo.css">
        <link rel="shortcut icon" href="../img/icone_creati.ico" type="image/x-icon">
        <title>Picking</title>
    </head>

    <body class="fundolegal">

    <div class="divMain">
        
        <center><h2 class="texto">Escolha de Picking</h2></center> 
        <div class="Line">
       
                     

       </div>
        
    <br>
    <br>
        <div class="BlueBlock">
       
    <br>
      
    <br>
    <br>
        <input type="text" name="soli2" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
    <br>
    <br>
        <input type="text" name="soli3" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
    <br>
    <br>
        <input type="text" name="soli4" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
    <br>
    <br>
        <input type="text" name="soli5" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
    <br>
    <br>
            
      
        </div>
        <div class="OrangeBlock">
            <form action="pagina10Aluno.php" method="POST">
            <input type="submit" class="botaob" placeholder="abrir">
            <br>
              <input type="text" name="soli1" size="15" class="caixaTexto textoPosicao" placeholder="Pedido de compra nº">
            <br>
            <br>
            </form> 
            <form action="pagina10Aluno.php" method="POST">
            <input  name="num2" type="submit" class="botaob" placeholder="abrir">
            <br>
            <br>
            <br>
            </form> 
            <form action="pagina10Aluno.php" method="POST">
            <input  name="num3" type="submit" class="botaob" placeholder="abrir">
            <br>
            <br>
            <br>
            </form> 
            <form action="pagina10Aluno.php" method="POST">
            <input  name="num4" type="submit" class="botaob" placeholder="abrir">
            <br>
            <br>
            <br>
            </form> 
            <form action="pagina10Aluno.php" method="POST">
            <input  name="num5" type="submit" class="botaob" placeholder="abrir">
            </form>   

        </div>
    </div>
    <?php
        include 'MenuAluno.php'
    ?>
</body>
</html>