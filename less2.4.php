<?php
    /*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

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
    if($y == 0)
        return "<<< нельзя делить на 0 >>>";
    return $x / $y;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
        case '-':
            return diff($arg1, $arg2);
        case '*':
            return mult($arg1, $arg2);
        case '/':
            return div($arg1, $arg2);
        default:
            return "что-то не так...";
    }
}

echo "($a) + ($b) = ".mathOperation($a,$b,'+')."<br>";
echo "($a) - ($b) = ".mathOperation($a,$b,'-')."<br>";
echo "($a) * ($b) = ".mathOperation($a,$b,'*')."<br>";
echo "($a) / ($b) = ".mathOperation($a,$b,'/')."<br>";

?>
