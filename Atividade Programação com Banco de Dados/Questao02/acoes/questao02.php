	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$dataNascimento = $_POST['dataNascimento'];

		echo "<h2>Dados do Cadastro:</h2>";
		echo "<p>Nome: $nome</p>";
		echo "<p>E-mail: $email</p>";
		echo "<p>Data de Nascimento: $dataNascimento</p>";
	}
	?>