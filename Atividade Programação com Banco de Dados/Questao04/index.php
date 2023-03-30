<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Questão 04</title>
</head>

<body>
	<div class="main">
    	<form method="post" action="acoes/questao04.php">
		<h3>Questão 01</h3>
    <div class="bloco-input">
    	<label for="estado">Estado:</label>
		<input type="text" name="estado"><br><br>
	</div>
	
    <div class="bloco-input">
		<label for="cidade">Cidade:</label>
		<input type="text" name="cidade"><br><br>
	</div>

    <div class="bloco-input">
		<label for="data_nascimento">Data de nascimento:</label>
		<input type="date" name="data_nascimento"><br><br>
	</div>
	
    <div class="bloco-input">
		<label for="cor_preferida">Cor preferida:</label>
		<input type="text" name="cor_preferida"><br><br>
	</div>

    <div class="bloco-input">
		<label for="hora">Hora:</label>
		<input type="time" name="hora"><br><br>
	</div>

	<div class="bloco-btn margin-top20">
		<button type="submit" name="submit">Enviar</button>
	</div>
		
		</form>
	</div>
</body>

</html>