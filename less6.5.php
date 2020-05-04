<?
/*
5. *Написать CRUD-блок для управления выбранным модулем через единую функцию (doFeedbackAction())
*/
include "models/config.php";

$sql = "select * from  goods";
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
    <hr>
    <h3>Товар:</h3>
    <form action="add.php" enctype="multipart/form-data" method="post">
        <div class="good">
            <label for="title_good">Название товара</label>
            <br>
            <input type="text" id="title_good" name="title" placeholder="">
            <br>
            <label for="price_good">Цена</label>
            <br>
            <input type="text" id="price_good" name="price" placeholder="">
            <br>
            <div class="info_good">
                <label for="info_good">Информация о товаре</label><br>
                <textarea id="info_good" cols="80" rows="10" required
                            placeholder="" name="info"></textarea>
            </div>
            <input type="file" name="photo" accept="image/jpeg">
            <br>
            <label for="amount_good">Количество</label>
            <br>
            <input type="text" id="amount_good" name="amount" placeholder="">
            <br>
        </div>
        <br>
        <input type="submit" value="Добавить">
        <br>
        <br>
    </form>

    <?php

    //$sql = "select * from goods";
    //$res = mysqli_query($link,$sql);

    ?>

    <table border="1" width="100%vw">
    <? while ($data = mysqli_fetch_assoc($res)) :?>
        <tr>
            <td><?=$data['id'];?></td>
            <td><?=$data['title'];?></td>
            <td><input id="price_<?=$data['id'];?>" type="text" value="<?=$data['price']?>"></td>
            <td><?=$data['info'];?></td>
            <td><?=$data['images'];?></td>
            <td><?=$data['amount'];?></td>
            <td><?=$data['date_create'];?></td>
            <td>
                <form action="v_edit.php" method="post">
                    <input type="text" name="id" value="<?=$data['id'];?>" hidden>
                    <input type="submit" value="Редактировать">
                </form>
                <form action="delete.php" method="post">
                    <input type="text" name="id" value="<?=$data['id'];?>" hidden>
                    <input type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    <? endwhile?>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script>
        function save(_good,_good,_good,_good,_good,){
        let title_good = document.getElementById(title_good).value;
        let price_good = document.getElementById(price_good).value;
        let info_good = document.getElementById(info_good).value;
        let images_good = document.getElementById(images_good).value;
        let amount_good = document.getElementById(amount_good).value;


        let str = "price="+price+"&id="+id;
            //alert(str);
            $.ajax({
                type:'GET',//тип запроса
                url:'save.php',//файл, принимающий данные
                data:str,
                success: function(answer){
                    alert(answer);
                }

            })
        }
    </script>
</body>
</html>