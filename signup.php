<html>
    <head>
        <title>Panderío e Companhia, seu dinheiro, nossa alegria</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="fundo">	
            <center>
			<div class="divLogin">
			<form method="post" action="cadastro.php" id="formcadastro" name="formcadastro" >
				<h2>Registre um filme:</h2>
				<input type="text" name="titulo" id="titulo" size="20" class="caixaTexto" placeholder="título"><br />
				<br>
				<input type="text" name="duracao" id="duracao" size="20" class="caixaTexto" placeholder="duração"><br />
				<br>
				<input type="text" name="classificacao" id="classificacao" size="20" class="caixaTexto" placeholder="classificação indicativa"><br />
				<br>
				<input type="text" name="sinopse" id="sinopse" size="20" class="caixaTexto" placeholder="sinopse"><br/>
                <br>
				<input type="text" name="lancamento" id="lancamento" size="20" class="caixaTexto" placeholder="lançamento"><br/>
                <br>
				<input type="text" name="atores" id="atores" size="20" class="caixaTexto" placeholder="atores principais"><br/>
                <br>
				<input type="text" name="diretor" id="diretor" size="20" class="caixaTexto" placeholder="diretor"><br/>
                <br>
				<input type="submit" value="registrar" class="botao"/>
                <p></p>
			</form>
			</div>
            <p></p>
            </center>
            
            <div>
            <form method="post" action="pesquisa.php" id="formpesquisa" name="formpesquisa" >
            <input type="text" name="pesquisa" id="pesquisa" size="20" class="caixaTexto2" placeholder="buscar">
            <br>
            <p></p>
			<input type="submit" value="pesquisar" class="botao2"/>
            </div>
    </body>
</html>
