<html>
<head>
    <title> hw04-02 gallery </title>
</head>
<body>

<?php
const IMG_DIR = __DIR__ . '/images/';

/* Собираем названия файлов из папки в массив, удаляем лишние элементы. */
$imgNamesArray = scandir(IMG_DIR);
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);

/* Ограничиваем по типу возможность вывода в галерею не изображения. */
foreach ($imgNamesArray as $imgName) :
    $imgType = exif_imagetype(IMG_DIR . $imgName);
    if (false != $imgType) :
        ?><img src="images/<?php echo $imgName; ?>" height="150px" /> <?php
    endif;
endforeach;
?>

</body>
</html>