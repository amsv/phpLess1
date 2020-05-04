<?
/* 4. Создать страницу каталога товаров:

    товары хранятся в БД (структура прилагается);
    страница формируется автоматически;
    по клику на товар открывается карточка товара с подробным описанием.
    подумать, как лучше всего хранить изображения товаров.
*/
include "models/config.php";

$id = $_GET['id'];

$sql = "select * from goods where id=".$id;
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
    <a href="less6.4.php">Вернуться</a>
    <div>
        <?while ($data = mysqli_fetch_assoc($res)) :?>
            <div>
                    <img style="width: 500px; float: left;" src="<?=DIR_PHOTO_BIG.$data['images'];?>">
                    <h1><?=$data['title'];?></h1>
                    <p><?=$data['info'];?></p>
                    <p><?=$data['price'];?> руб.</p>
                    <p><?=($data['amount'] > 0)?"Товар есть в наличии":"Товара нет в наличии";?></p>
            </div>
        <? endwhile;?>
    </div>
    <hr>
    <h3>Оставьте комментарий:</h3>
    <form action="models/sendCommen.php" method="post">
        <div class="commentTitle">
            <label for="commetFio">Ваше имя</label>
            <br>
            <input type="text" id="commentFio" name="fio" placeholder="Ваше имя">
            <br>
            <label for="emailAddress">Ваш e-mail адрес</label>
            <br>
            <input id="emailAddress" type="email" name="email" size="64" maxLength="64" required placeholder="" pattern="/\A[^@]+@([^@\.]+\.)+[^@\.]+\z/" title="Введите адрес">
            <br>
        </div>
        <div class="commentBox">
            <label for="message">Отзыв</label><br>
            <textarea id="message" cols="80" rows="8" required
                        placeholder="Оставьте отзыв." name="comment"></textarea>
        </div>
        <input type="hidden" name="id_good" value="<?=$id?>">
        <input type="submit" value="Оправить">
    </form>
    <hr style="clear: both">
    <h3>Отзывы:</h3>
    <?
    $sql = "select * from  reviews where id_good=$id order by date_create";
    $res = mysqli_query($link, $sql) or die("Ошибка");

    while ($data = mysqli_fetch_assoc($res)) :?>
        <div>
            <span><?=$data['date_create'];?></span>
            <p><b><?=$data['fio'];?>:</b>
            <?=$data['comment'];?></p>
        </div>

    <? endwhile; ?>
</body>
</html>