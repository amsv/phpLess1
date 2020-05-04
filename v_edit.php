<?
include "models/config.php";

$id = "'".trim($_POST['id'])."'";
//print_r($_POST);
$sql = "select * from  goods where id=".$id;
$res = mysqli_query($link, $sql) or die("Ошибка");
?>

<? while ($data = mysqli_fetch_assoc($res)) :?>
<h3>Товар:</h3>
<form action="edit.php" enctype="multipart/form-data" method="post">
    <div class="good">
        <input type="text" name="id" value="<?=$data['id'];?>" hidden>
        <label for="title_good">Название товара</label>
        <br>
        <input type="text" id="title_good" name="title" placeholder="" value="<?=$data['title']?>">
        <br>
        <label for="price_good">Цена</label>
        <br>
        <input type="text" id="price_good" name="price" placeholder="" value="<?=$data['price']?>">
        <br>
        <div class="info_good">
            <label for="info_good">Информация о товаре</label><br>
            <textarea id="info_good" cols="80" rows="10" required
                        placeholder="" name="info"><?=$data['info']?></textarea>
        </div>
        <br>
        <label for="photo_good">Выберете изображение(если хотите изменить)</label>
        <br>
        <input type="file" id="photo_good" name="photo" accept="image/jpeg">
        <br>
        <input type="text" id="images_good" name="images" placeholder="" value="<?=$data['images']?>" hidden>
        <br>
        <label for="amount_good">Количество</label>
        <br>
        <input type="text" id="amount_good" name="amount" placeholder="" value="<?=$data['amount']?>">
        <br>
    </div>
    <br>
    <input type="submit" value="Сохранить">
    <br>
    <br>
</form>
<? endwhile?>


<?//header("Location: ../less7.3.php");
