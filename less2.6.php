<?php
    /*
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

function power($val, $pow){
    $pow = (int)$pow;
    if ($pow == 1) {
        return $val;
    }
    if ($pow == 0) {
        return 1;
    }
    if ($pow < 0) {
        return  1/$val * power($val, $pow+1);
    }
    return $val * power($val, $pow-1);
}

$a = 1.2;
$b = 2;

echo "$a в степени $b = ".power($a, $b)."<br>";
echo "$a в степени -$b = ".power($a, -1*$b)."<br>";
echo "$a в степени 0 = ".power($a, $b-$b)."<br>";

?>
