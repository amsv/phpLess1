<?
/* 4. Создать страницу каталога товаров:

    товары хранятся в БД (структура прилагается);
    страница формируется автоматически;
    по клику на товар открывается карточка товара с подробным описанием.
    подумать, как лучше всего хранить изображения товаров.
*/
include "models/config.php";

$sql = "select * from goods";
$res = mysqli_query($link, $sql) or die("Ошибка");


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
    <div style="display: flex; flex-flow: row wrap;">
        <?while ($data = mysqli_fetch_assoc($res)) :?>
            <div style="width: 20%; border: 1px solid black; margin: 10px; padding: 10px;">
                <a href="item.php?id=<?=$data['id'];?>" style="text-decoration: none; color: #000">
                    <img src="<?=DIR_PHOTO_SMALL.$data['images'];?>">
                    <p><?=$data['title'];?></p>
                    <p><?=$data['price'];?> руб.</p>
                </a>
            </div>
        <? endwhile; ?>
    </div>
</body>
</html>