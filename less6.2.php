<?
//1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
//2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.
$val1 = (int)$_GET['val1'];
$val2 = (int)$_GET['val2'];
$val3 = $_GET['val3'];
$opPlus = $_GET['opPlus'];
$opMinus = $_GET['opMinus'];
$opMult = $_GET['opMult'];
$opDiv = $_GET['opDiv'];

function calculator( $x, $y, $operation ) {
    switch ($operation) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        case '/':
            return ($y)?$x/$y: "на ноль делить нельзя";
        default:
            return " ";
            break;
    }
}

if(isset($opPlus)) $operation = $opPlus;
if(isset($opMinus)) $operation = $opMinus;
if(isset($opMult)) $operation = $opMult;
if(isset($opDiv)) $operation = $opDiv;


$val3 = calculator( $val1, $val2, $operation);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="/">Вернуться</a>
    <form action="#" method="get">
        <input type="text" name="val1" placeholder="Число 1" value="<?=$val1;?>">
        <input type="submit" value="+" name="opPlus">
        <input type="submit" value="-" name="opMinus">
        <input type="submit" value="*" name="opMult">
        <input type="submit" value="/" name="opDiv">
        <input type="text" name="val2" placeholder="Число 2" value="<?=$val2;?>">
        <input type="text" name="val3" placeholder="Число 2" value="<?=$val3;?>">
    </form>
</body>
</html>