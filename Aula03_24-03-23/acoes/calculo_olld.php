<?php
$num1  = $_POST["num1"];
$num2  = $_POST["num2"];
$opera = $_POST["opera"];

if ($opera == "Multi") {
    echo "Sua multiplicação:<br>";
    echo "Resultado: ";
    echo $num1 * $num2;
} elseif ($opera == "Sub") {
    echo "Sua subtração:<br>";
    echo "Resultado: ";
    echo $num1 - $num2;
} elseif ($opera == "Adic") {
    echo "Sua adição:<br>";
    echo "Resultado: ";
    echo $num1 + $num2;
} elseif ($opera == "Divis") {
    echo "Sua divisão:<br>";
    echo "Resultado: ";
    echo $num1 / $num2;
} else { 
    echo "Você não selecionou nenhuma operação válida!";
}


?>