<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$file = scandir($path."/images/small");

for ($i=2; $i<count($file) ; $i++) :?>
    <a href="photo.php?name=/images/big/<?=$file[$i]?>" target="_blank">
        <img src="images/small/<?=$file[$i]?>" width="33%">
    </a>
    <?php if( (($i-1) % 3) == 0) :?>
        <br>
    <?php endif?>
<?php endfor?>
