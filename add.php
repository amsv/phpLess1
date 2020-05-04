<?
include "models/config.php";

$title = "'".trim($_POST['title'])."'";
$price = "'".trim($_POST['price'])."'";
$info =  "'".trim($_POST['info'])."'";
$images = "'".trim($_FILES['photo']['name'])."'";
$amount = "'".trim($_POST['amount'])."'";

$sql = "INSERT INTO goods(title, price, info, images,amount) VALUES ($title,$price,$info,$images,$amount)";
$res = mysqli_query($link, $sql) or die("Ошибка");


//header("Location: ../less7.3.php");
$path = "images/".$_FILES['photo']['name'];
//print_r($_FILES);
move_uploaded_file($_FILES['photo']['tmp_name'],$path);


$redicet = $_SERVER['HTTP_REFERER'];
header ("Location: $redicet");