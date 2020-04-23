<meta charset="utf-8">
<?php
/*
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/

$str = "5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.";
/* Вариант1*/
function spaceTo_1($str){
    $strLen = mb_strlen($str);
    while ($strLen) {
        $strVal = mb_substr($str, 0, 1);
        $strArr[] = ($strVal === " ") ? "_": $strVal;
        $str = mb_substr($str, 1, $strLen);
        $strLen = mb_strlen($str);
    }

    return implode("",$strArr); // с
}

/* Вариант2*/

function spaceTo_2($str) {
    return str_replace(" ", "_", $str);
}
/********************/
echo spaceTo_1($str);
echo "<hr>";
echo spaceTo_2($str);






