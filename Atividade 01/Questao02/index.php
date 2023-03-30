<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">[
	<link rel="stylesheet" href="assets/css/style.css">
    <title>Questão 02</title>
</head>

<body>
	<div class="main">
    	<form method="post" action="acoes/questao02.php">
	<h3>Questão 02</h3>
    
	<div class="bloco-input">
		<label for="nome">Nome:<br></label>
		<input type="text" name="nome"><br><br>
	</div>

	<div class="bloco-input">
		<label for="email">E-mail:<br></label>
		<input type="email" name="email"><br><br>
	</div>

	<div class="bloco-input">
		<label for="dataNascimento">Data de Nascimento:<br></label>
		<input type="date" name="dataNascimento"><br><br>
	</div>

	<div class="bloco-btn margin-top20">
		<button type="submit" name="submit">Enviar</button>
	</div>
	
		</form>
	</div>
</body>

</html>