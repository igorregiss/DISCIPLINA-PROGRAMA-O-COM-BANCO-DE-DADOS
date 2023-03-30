<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Questão 06</title>
</head>

<body>
    <div class="main">
    	<form method="post" action="acoes/questao06.php">
		<h3>Questão 06</h3>

    <div class="bloco-input">
		<?php for ($i=0; $i<10; $i++) { ?>
			<label for="nome<?php echo $i+1 ?>">Nome <?php echo $i+1 ?>:</label>
			<input type="text" name="nomes[]" id="nome<?php echo $i+1 ?>"><br>
		<?php } ?>
    </div>
    
    <div class="bloco-btn margin-top20">
		<button type="submit" name="submit">Enviar</button>
	</div>

        </form>
    </div>
</body>

</html>