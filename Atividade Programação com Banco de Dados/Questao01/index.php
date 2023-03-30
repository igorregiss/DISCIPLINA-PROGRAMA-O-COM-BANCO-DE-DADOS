<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Questão 01</title>
</head>

<body>
    <div class="main">
        <form method="POST" action="acoes/questao01.php">
            <h3>Questão 01</h3>
            <div class="bloco-input">
			<label for="num1"><p>Número 1:</p></label>
                <input type="number" name="num1" id="num1" placeholder="Informe seu primeiro número" required>
            </div>

            <div class="bloco-input">
                <label><p>Número 2:</p></label>
                <input type="number" name="num2" id="num2" placeholder="Informe seu segundo número" required>
            </div>


            <div class="bloco-input">
			<label for="operacao"><p>Operação:</p></label>
		<select name="operacao">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select><br><br>
            </div>

        <div class="bloco-btn margin-top20">
		    <button type="submit" name="submit">Calcular</button>
	    </div>
        
        </form>
    </div>
</body>

</html>