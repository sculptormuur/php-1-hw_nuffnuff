<html>
<head>
    <title> hw3-2_img </title>
</head>
<body>

<?php

/* проверяем на существование и подключаем файл с массивом изображений */
if (is_file(__DIR__ . '/image_array.php')) {
    include_once __DIR__ . '/image_array.php';
} else {
    echo 'Ошибка! Файл с номерами изображений отсутствует.', "\n";
}

/* выводим изображение с помощью цикла и условий */
if (isset($_GET['id'])) :
    $id = (int)$_GET['id'];
    assert((1 < $id) && (count($imgArray) > $id));
    if ((is_array($imgArray))) :
        foreach ($imgArray as $key => $value) :
            if ($id == $key) :
                ?><img src="<?php echo 'images/', $value; ?>" height="400px"/><?php
                break;
            elseif($key == count($imgArray)) :
                echo 'Ошибка! Изображение с id, равным ', $id, ', не найдено.', "\n";
            endif;
        endforeach;
    else :
        echo 'Ошибка! Переменная $imgArray не является массивом.', "\n";
    endif;
else :
    echo 'Ошибка! Номер изображения не указан.', "\n";
endif;
?>

</body>
</html>
