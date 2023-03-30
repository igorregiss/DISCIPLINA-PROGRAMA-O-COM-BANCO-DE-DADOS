<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$senha_md5 = md5('uece2023');

		if ($email == 'uece@uece.br' && $senha_md5 == md5($senha)) {
			echo "<h2>Login Correto</h2>";
		} else {
			echo "<h2>Login Incorreto</h2>";
		}
	}
	?>