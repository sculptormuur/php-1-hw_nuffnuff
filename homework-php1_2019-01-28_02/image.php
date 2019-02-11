<html>
<head>
    <title> hw3-2_img </title>
</head>
<body>

<?php
// надо else понаставить

if (is_file(__DIR__ . '/image_array.php')) {
    include_once __DIR__ . '/image_array.php';
} else {
    echo 'Ошибка! Файл с номерами изображений отсутствует.', "\n";
}

if (isset($_GET['id'])) :
    $id = (int)$_GET['id'];
    assert((1 < $id) && (5 > $id));
    if ((is_array($imgNames))) :
        foreach ($imgNames as $key => $value) :
            if ($id == $key) :
                ?><img src="<?php echo 'images/', $value; ?>" height="400px"/><?php
                break;
            elseif($key == count($imgNames)) :
                echo 'Ошибка! Изображение с id, равным ', $id, ', не найдено.', "\n";
 //               break;
            endif;
        endforeach;
    else :
        echo 'Ошибка! Переменная $imgNames не является массивом.', "\n";
    endif;
else :
    echo 'Ошибка! Номер изображения не указан.', "\n";
endif;
?>

</body>
</html>
