
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$data_nascimento = $_POST['data_nascimento'];
		$cor_preferida = $_POST['cor_preferida'];
		$hora = $_POST['hora'];

		echo "<h2>Dados informados:</h2>";
		echo "<p>Estado: $estado</p>";
		echo "<p>Cidade: $cidade</p>";
		echo "<p>Data de nascimento: $data_nascimento</p>";
		echo "<p>Cor preferida: $cor_preferida</p>";
		echo "<p>Hora: $hora</p>";
	}
	?>