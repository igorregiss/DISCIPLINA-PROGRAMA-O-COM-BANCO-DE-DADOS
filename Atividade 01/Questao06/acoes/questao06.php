<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$nomes = $_POST['nomes'];
			echo '<h2>Nomes:</h2>';
			echo '<ul>';
			foreach ($nomes as $nome) {
				echo '<li>'.$nome.'</li>';
			}
			echo '</ul>';
		}
	?>