<?php
$nome  = strtoupper($_POST["nome"]);
$senha = md5($_POST["senha"]);
$email = strtolower($_POST["email"]);
$sexo = strtoupper($_POST["sexo"]);

echo "Seu nome:<br>";
echo $nome, "<br>";
echo "===========================<br>";
echo "Sua senha:<br>";
echo $senha, "<br>";
echo "===========================<br>";
echo "Seu email:<br>";
echo $email, "<br>";
echo "===========================<br>";
if ($sexo == "F")
{
echo "Seu sexo:<br>";
echo "Feminino";
echo "===========================<br>";
}
else
{
echo "Seu sexo:<br>";
echo "Masculino";
}

/*
CRIE UM PROGRAMA E INFORME DOIS NÚMEROS
 1 - OPERANDO
 2 - LIMITE
 3 - MULTIPLICAÇÃO / SUBTRAÇÃO / DIVISÃO / ADIÇÃO

 5 - 10
 5 * 1 = 5
 5 * 2 = 10
 *...'10




*/



?>