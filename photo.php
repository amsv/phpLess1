<?php
  include_once 'models/config.php';

  $id = $_GET['id'];
  $name = $_GET['name'];

  $sql = "select * from images where name='".$name."' and path='".DIR_PHOTO_BIG."'";
  $res = mysqli_query($link, $sql) or die("Ошибка");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Оригинал фотографии</title>
</head>
<body>
  <a href="index.php"> Вернуться в галерею </a>
  <?

  while ($data = mysqli_fetch_assoc($res)) :?>
    <h2>Просмотров:     <?=$data['seen'];?></h2>
    <div>
      <img src="<?=$data['path'].$data['name'] ?>">
    </div>
    <?$sql = "UPDATE images SET seen=".($data['seen']+1)." WHERE id=".$data['id'];?>
  <?endwhile?>
  <?
    mysqli_query($link, $sql);
    mysqli_close($link);
  ?>
</body>
</html>