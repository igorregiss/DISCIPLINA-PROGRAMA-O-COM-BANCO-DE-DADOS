<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numero = $_POST['numero'];

		$soma = 0;
		for ($i = 0; $i <= $numero; $i++) {
			$soma += $i;
		}

		echo "A soma dos números até o valor informado é: " . $soma;
	}
	?>