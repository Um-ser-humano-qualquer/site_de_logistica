<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/stylepg7Aluno.css">
        <link rel="stylesheet" href="css/styleFundo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="shortcut icon" href="img/icone_creati.ico" type="image/x-icon">
        <title>Movimentação2</title>
    </head>

<body class="fundo">

 <div class="divMain2">

            <div class="div-mid">
                
                <div class="texto">
                    <input type="text" size="20">
                    <br>
                    <br>
                    <input type="text" size="20">
             </div>
           
        <div class="tabela">
                
                <div class="Btable"> <!-- primeira tabela -->
                    <div class="posicaoTabela">
                        
                            <input type="text" class="tableL texto" placeholder="QNT">
                        
                        
                            <input type="text" class="tableC texto" placeholder="R$/UNIT">
                        
                        
                            <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                        
                    </div>
                </div>
                

                
            <div class="Line"></div> <!-- linha -->

            <div class="Btable2"><!-- segunda tabela -->
                <div class="posicaoTabela2">
                    
                        <input type="text" class="tableL texto" placeholder="QNT">
                    
                    
                        <input type="text" class="tableC texto" placeholder="R$/UNIT">
                    
                    
                        <input type="text" class="tableR texto" placeholder="POSIÇÃO">
                    
                </div>
            </div>
                

            </div>
        </div>

        <div class="div-ok"> <!-- tabela dos Ok's -->

            <h3>Finalizar</h3>
            
            <div class="divLoginMygod">
            <input type="submit" value="Ok" class="botao">
            </div>
            <br>
            <div class="divLoginMy">
            <input type="submit" value="Ok" class="botu">
            </div>
            
            <div class="divLoginT">
            <form method="POST0" action="pagina6Aluno.php">
            <input type="submit" value="Voltar" class="boto">
            </form>
            </div>

        </div>

        <div class="divLoginM"><h2>Operações em Aberto</h2></div>
        <div class="divLoginS"><h2>Finalizar</h2></div>

    </div>
    
    <?php 
            include 'menuAluno.php'
    ?>

    </body>
</html>