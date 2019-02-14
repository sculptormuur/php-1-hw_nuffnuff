<html>
<head>
    <title> hw3-2_img </title>
</head>
<body>

<?php

/* проверяем на существование и подключаем файл с массивом изображений */
if (is_file(__DIR__ . '/images_arra.php')) {
    require_once __DIR__ . '/images_array.php';
} else {
    echo 'Ошибка!', "\n";
}

/* выводим изображение с помощью цикла и условий */
if (isset($_GET['id'])) :
    $id = (int)$_GET['id'];
    if ((0 < $id) && (count($imgArray) >= $id)) :
        $imageName = $imgArray[$id];
        ?><img src="<?php echo 'images/', $imageName; ?>" height="400px"/><?php
    else :
        echo 'Ошибка! Изображение с id, равным ', $id, ', не найдено.', PHP_EOL;
    endif;
else :
    echo 'Ошибка! Номер изображения не указан.', "\n";
endif;
?>

</body>
</html>
