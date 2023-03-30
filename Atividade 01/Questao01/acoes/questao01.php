<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operacao = $_POST['operacao'];

		switch ($operacao) {
			case '+':
				$resultado = $num1 + $num2;
				break;
			case '-':
				$resultado = $num1 - $num2;
				break;
			case '*':
				$resultado = $num1 * $num2;
				break;
			case '/':
				$resultado = $num1 / $num2;
				break;
			case '%':
				$resultado = $num1 % $num2;
				break;
			default:
				$resultado = "Operação Inválida";
				break;
		}

		echo "<h2>Resultado:</h2>";
		echo "<p>$num1 $operacao $num2 = $resultado</p>";
	}
	?>