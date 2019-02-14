<html>
<head>
    <title> hw03-02 </title>
</head>
<body>

<?php

/* проверяем на существование и подключаем файл с массивом изображений */
if (is_file(__DIR__ . '/images_array.php')) {
    require_once __DIR__ . '/images_array.php';
} else {
    echo 'Ошибка! Файл с номерами изображений отсутствует.', "\n";
}

/* выводим ссылки на изображения с превью с помощью цикла */
if (is_array($imgArray)) :
    foreach ($imgArray as $key => $value) :
        ?><a href="image.php?id=<?php echo $key;
    ?>"><img src="images/<?php echo $value ?>" height="200px"/></a>
    <?php
    endforeach;
else :
    echo 'Ошибка! Переменная не является массивом или не существует.';
endif;
?>

</body>
</html>