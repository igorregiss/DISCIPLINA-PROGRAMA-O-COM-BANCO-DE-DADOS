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
        <form method="POST" action="acoes/cadastro.php">
            <h3>Cadastre-se</h3>
            <div class="bloco-input">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Informe seu nome">
            </div>

            <div class="bloco-input">
                <label>Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Informe sua senha">
            </div>

            <div class="bloco-input">
                <label>Email:</label>
                <input type="email" name="email" id="email" placeholder="Informe sua email">
            </div>

            <div class="bloco-input">
                <label>Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="bloco-btn margin-top20">
                <button>Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>