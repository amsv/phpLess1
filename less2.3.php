<?php
    /*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

*/

$a = rand() - rand();
$b = rand() - rand();

echo "a = $a b = $b","<hr>";

function sum($x,$y){
    return $x + $y;
}

function diff($x,$y){
    return $x - $y;
}

function mult($x,$y){
    return $x * $y;
}

function div($x,$y){
    if ($y == 0)
        return "<<< нельзя делить на 0 >>>";
    return $x / $y;
}

echo "($a) + ($b) = ".sum($a,$b)."<br>";
echo "($a) - ($b) = ".diff($a,$b)."<br>";
echo "($a) * ($b) = ".mult($a,$b)."<br>";
echo "($a) / ($b) = ".div($a,$b)."<br>";

?>
