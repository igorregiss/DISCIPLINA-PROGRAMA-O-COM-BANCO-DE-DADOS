<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="main">
        <form method="POST" action="acoes/calculo.php">
            <h3>Calculadora</h3>
            <div class="bloco-input">
                <label><p>Número 1:</p></label>
                <input type="number" name="num1" id="num1" placeholder="Informe seu primeiro número" required>
            </div>

            <div class="bloco-input">
                <label><p>Limite:</p></label>
                <input type="number" name="num2" id="num2" placeholder="Informe seu segundo número" required>
            </div>


            <div class="bloco-btn margin-top20">
                <button>Calcular</button>
            </div>
        </form>
    </div>
</body>

</html>