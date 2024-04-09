<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/senai-logo.png">
    <title>Sistema Logistica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<center>
    <div class="divlogin">
			<form method="post" action="verificaLogin.php" id="formlogin" name="formlogin" >
			<fieldset>
  			<legend>Fazer login como Professor</legend>
 			<div>
    		<input
      			type="checkbox"
      			id="codificação"
      			name="interesse"
      			value="codificação"
      			checked />
    		<label for="coding"> Codificação </label>
  			</div>
  			<div>
    		<input type="checkbox" id="música" name="interesse" value="música" />
    		<label for="music"> Música </label>
  			</div>
			</fieldset>
            
            <input type="text" placeholder='Email' name="emailUsuario" class="caixaTexto" id="emailUsuario" size="20"><br />
				
				<input type="password" placeholder='Senha' name="senha" class="caixaTexto" id="senha" size="20">
				<br>
				<center>
					<input type="submit" value="LOGAR"  />
				</center>
			</form>
		</div>
	
		<a href="signup.php">Não possui uma conta? Clique aqui!</a>
	</center>
        
</body>
</html>
