<?
//3. 3. Добавить функционал отзывов в имеющийся у вас проект.
include "models/config.php";

$sql = "select * from  reviews order by date_create";
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
        <input type="hidden" name="id_good" value="0">
        <input type="submit" value="Оправить">
    </form>
    <hr>
    <h3>Отзывы:</h3>
    <?
    while ($data = mysqli_fetch_assoc($res)) :?>
        <div>
            <span><?=$data['date_create'];?></span>
            <p><b><?=$data['fio'];?>:</b>
            <?=$data['comment'];?></p>
        </div>

    <? endwhile; ?>


</body>
</html>