<?php

$nome = "Igor";
$idade = 21;
$num1 = 10;
$num2 = "10";
echo "Olá ".$nome;
echo "<br>Olá $nome, seja bem vindo";
echo "<br>Você tem $idade anos!<br>";
echo $num1+$num2;
echo "<br>";

if($idade < 12){
    echo "VOCÊ TEM $idade, VOCÊ É UMA CRIANÇA";

}else if($idade >= 12 && $idade < 21){
    echo "VOCÊ TEM $idade, VOCÊ É UMA ADOLESCENTE";
}else if($idade >=21 && $idade < 60){
    echo "VOCÊ TEM $idade, VOCÊ É UM ADULTO";
}else{
    echo "MAIOR RESPEITO! VOCÊ TEM $idade, UM DEUS EX-MACHINE ESTÁ ENTRE NÓS";
}
echo "<br>";

// strtoupper -> CAIXA ALTA MAS SEM ACENTOS EM CAIXA ALTA
// mb_strtoupper -> CAIXA ALTA COM ACENTOS EM CAIXA ALTA TAMBÉM

echo mb_strtoupper($nome);
echo "<br>";

//STRTOLOWER -> CAIXA BAIXA SEM ACENTOS
//MB_STRTOLOWER -> CAIXA BAIXA COM ACENTOS

echo mb_strtolower($nome);
echo "<br>";

//SUBSTR -> PEGAR PARTE DE UMA STRING

echo substr($nome, 0,2);
echo "<br>";

//STRLEN -> RETORNA O TAMANHO DA STRING
echo strlen("bola");
echo "<br>";

//STR_REPEAT -> REPETIR UMA STRING
echo str_repeat($nome, 10);
echo "<br>";

//TRIM -> REMOVER ESPAÇOS NO INÍCIO E FINAL DA STRING
$nome2 = " Maria ";
echo trim($nome2);
echo "<br>";

//STR_REPLACE -> SUBSTITUI UMA STRING POR OUTRA
//STR_REPLACE("O QUE", "PELO QUE", $ONDE);
$frase = "Francisco é um corno";
echo str_replace("corno", "heroi", $frase);
echo "<br>";

//FUNÇÃO DATE - TIME

$anoAtual = date ("Y"); // RETORN ALL DIGITS OF YEAR
$anoAtual2 = date ("y"); // RETURN THE LAST TWO DIGITS
$mesAtual = date ("M"); // RETORN THE MONTH
$diaAtual = date ("D"); // RETURN THE DAY
echo ($anoAtual);
echo "<br>";
echo ($anoAtual2);
echo "<br>";
echo ($mesAtual);
echo "<br>";
echo ($diaAtual);
echo "<br>";
$dataAtual = date("y-m-d h:i:s");
echo ($dataAtual);

//ARRAY EM PHP
$pessoas = ["João", "Maria", "José"];
echo ($pessoas)
?>
