<html>
<head>
    <title> hw02 </title>
</head>
<body>

<?php

/* сделай функцию: */
/* - которая принимает массив имён картинок */
/* - и возвращает массив ссылок на эти картинки */


include __DIR__ . '/image_array.php';

if (is_array($imgNames)) :
    foreach ($imgNames as $key => $value) :
        ?><a href="image.php?id=<?php
        echo $key;
        ?>"><img src="images/<?php echo $value ?>" height="200px"/></a>
    <?php
    endforeach;
else :
    echo 'Данная переменная не является массивом';
endif;
?>

<?php


?>

</body>
</html>