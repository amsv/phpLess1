<?
include "models/config.php";

$id = "'".trim($_POST['id'])."'";

$sql = "DELETE FROM goods WHERE id=".$id;
$res = mysqli_query($link, $sql) or die("Ошибка");

$redicet = $_SERVER['HTTP_REFERER'];
header ("Location: $redicet");

//header("Location: ../less7.3.php");
