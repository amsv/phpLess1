
<!--
/1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
*/
-->
<?
    include_once 'models/config.php';
    include_once 'models/loadImg.php';

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок фотогаллерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500
		});
 	});
</script>
</head>
<body>
    <?
    $sql = "select * from images where path='".DIR_PHOTO_BIG."' order by seen desc";
    $res = mysqli_query($link, $sql) or die("Ошибка");

    $i=0;
    while ($data = mysqli_fetch_assoc($res)) :?>
        <a rel="gallery" href="photo.php?id=<?=$data['id']?>">
            <img src="<?=DIR_PHOTO_SMALL.$data['name']?>" width="33%">
        </a>
    <? if( (++$i % 3) == 0)
            echo "<br>";?>

    <? endwhile; ?>

    <? mysqli_close($link);?>
</body>
</html>
