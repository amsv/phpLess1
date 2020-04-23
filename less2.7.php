<?php
    /*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

22 часа 15 минут
21 час 43 минуты
*/
function ending_H(){
    switch (date("H") % 20) {
        case '1':
            return "час";
        case '2':
            return "часа";
        case '3':
            return "часа";
        case '4':
            return "часа";
        default:
            return "часов";
    }
}

function ending_i(){
    $val_i = date("i");
    if (($val_i > 4) && ($val_i < 22)) {
        return "минут";
    } else {
        switch ($val_i % 10) {
            case '1':
                return "минута";
            case '2':
                return "минуты";
            case '3':
                return "минуты";
            case '4':
                return "минуты";
            default:
                return "минут";
        }
    }
}

echo date("H ");
echo ending_H();
echo date(" i ");
echo ending_i();


?>
