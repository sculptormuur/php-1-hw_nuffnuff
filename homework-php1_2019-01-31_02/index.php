<html>
<head>
    <title> hw04-02 gallery </title>
</head>
<body>

<?php

/* Собираем названия файлов из папки в массив, удаляем лишние элементы. */
$imgNamesArray = scandir(__DIR__ . '/images/');
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);

/* Ограничиваем по расширению возможность вывода в галерею не изображения. */
$pattern = '/\.(jpe??g|png|gif|bmp|tif{1,2})$/i';
foreach ($imgNamesArray as $imgName) :
    if (1 == (preg_match($pattern, $imgName))) :
        ?><img src="images/<?php echo $imgName; ?>" height="150px" /> <?php
    endif;
endforeach;
?>

</body>
</html>