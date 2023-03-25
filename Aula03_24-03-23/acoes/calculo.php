
<?php

use Elementor\Core\Common\Modules\EventTracker\DB;

$operando = $_POST['num1'];
$limite = $_POST['num2'];

/**
 * FOR | WHILE
 */
echo "<strong>Multiplicação</strong>";
echo "<br>";

$contador = 0;

while($contador <= $limite){
    $resultado = $operando * $contador;
    echo $operando."*".$contador ." = " . $resultado."<br>";
    $contador+=1;
}

echo "<br>";
echo "<strong>Soma</strong>";
echo "<br>";
for($i=0; $i<=$limite; $i++){
    $resultado = $operando + $i;
    echo $operando."+".$i ." = " . $resultado."<br>";
    $contador+=1;
}

echo "<br>";
echo "<strong>Subtração</strong>";
echo "<br>";
for($i=0; $i<=$limite; $i++){
    $resultado = $operando - $i;
    echo $operando."-".$i ." = " . $resultado."<br>";
    $contador+=1;
}

echo "<br>";
echo "<strong>Divisão</strong>";
echo "<br>";
for($i=1; $i<=$limite; $i++){
    $resultado = $operando/$i;
    echo $operando."/".$i ." = " . $resultado."<br>";
    $contador+=1;
}

?>