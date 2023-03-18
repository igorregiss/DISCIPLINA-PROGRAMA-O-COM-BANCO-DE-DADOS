<?php
// CRIANDO O ARRAY
$nomes = ['João da Silva','Maria','Marcos'];

/*
// DEBUG
echo "<pre>";
var_dump ($nomes);
echp "</pre>";
*/

// EXIBIR TODOS OS DADOS DO ARRAY
foreach($nomes as $nome){
    echo $nome."<br>";
}

// VERIFICANDO SE VALAOR EXISTE NO ARRAY
var_dump(in_array('João da Silva', $nomes)); // EXIBE TRUE CASO EXISTA E FALSE CASO NÃO EXISTA
echo "<br>=============================================================================<br>";

// EXIBE UMA MENSAGEM CASO EXISTA E OUTRA CASO NÃO EXISTA
if(in_array('João da Silva', $nomes)){
    echo "O nome <b>João da Silva</b> existe";
}else{
    echo "O nome <b>João da Silva</b> não existe";
}
echo "<br>=============================================================================<br>";

// TAMANHO DO ARRAY
echo "Tamanho do array nomes: ";
echo count($nomes);
echo "<br>=============================================================================<br>";

// JUNTANDO DOIS OU MAIS ARRAYS - array_merge($array, $array);
$frutas = ['banana', 'maca', 'goiaba', 'laranja'];
$verduras = ['cheiro verde', 'pimentão', 'alface'];
$frutasVerduras = array_merge($verduras, $frutas);
echo "<pre>";
var_dump($frutasVerduras);
echo "<pre>";
echo "<br>=============================================================================<br>";

// REMOVER ÚLTIMO ELEMENTO DE UM ARRAY - array_pop($array);
var_dump(array_pop($frutas));
echo "<br>=============================================================================<br>";
echo "<pre>";
var_dump($frutas);
echo "<pre>";

// REMOVER PRIMEIRO ELEMENTO DE UM ARRAY - array_shift$array);
echo "<br>=============================================================================<br>";
var_dump(array_shift($frutas));

// ADICIONAR UM ELEMENTO NO FINAL DO ARRAY - array_push($array, value)
echo "<br>=============================================================================<br>";
$disciplinas = ['port', 'mat', 'geo'];
array_push($disciplinas, 'hist');
echo "<pre>";
var_dump($disciplinas);
echo "<pre>";


// ADICIONAR UM ELEMENTO NO INICIO DO ARRAY
echo "<br>=============================================================================<br>";
array_unshift($disciplinas, 'computação');
echo "<pre>";
var_dump($disciplinas);
echo "<pre>";

// REMOVER ELEMENTOS REPETIDOS NO ARRAY - array_unique($array)
echo "<br>=============================================================================<br>";
$numeros = [10, 20, 35, 10, 54, 88, 10, 35];
var_dump(array_unique($numeros));

// ALTERAR ELEMENTO DE UM ARRAY
echo "<br>=============================================================================<br>";
$numeros[3] = 100;
var_dump(array_unique($numeros));

?>