<?
include "../models/config.php";
$fio = "'".trim($_POST['fio'])."'";
$email = "'".trim($_POST['email'])."'";
$comment = "'".trim($_POST['comment'])."'";
$id_good = trim($_POST['id_good']);
//print_r($_POST);

$sql = "INSERT INTO reviews(fio, email, comment, id_good) VALUES ($fio,$email,$comment,$id_good)";
$res = mysqli_query($link, $sql) or die("Ошибка");

$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");

//header("Location: ../less7.3.php");
