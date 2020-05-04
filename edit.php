<?
include "models/config.php";

$id = "'".trim($_POST['id'])."'";
$title = "'".trim($_POST['title'])."'";
$price = "'".trim($_POST['price'])."'";
$info =  "'".trim($_POST['info'])."'";
$images = "'".trim($_POST['images'])."'";
$amount = "'".trim($_POST['amount'])."'";

if(!empty($_FILES['photo']['name'])){
    $path = "images/".$_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],$path);
    $images = "'".$_FILES['photo']['name']."'";
}

$sql = "UPDATE goods SET title=$title,price=$price,info=$info,images=$images,amount=$amount WHERE id=".$id;
$res = mysqli_query($link, $sql) or die("Ошибка");


header("Location: ../less6.5.php");
