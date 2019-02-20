<html>
<head>
    <title> hw04-02 upload </title>
</head>
<body>

<?php
/* проверить тип файла? // ["type"] => "image/jpeg"
 * написать switch для разных расширений?
 * огранчить количество загруженных файлов?
 * @link http://php.net/manual/ru/features.file-upload.errors.php
 * */

// unset($_FILES['newFile']);

?>
<!-- надо ли делать форму на ЭТОЙ странице? -->

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="file" name="newFile" size="70" value="" form="imgFile" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const IMG_ADDRESS_PART = __DIR__ . '/images/' . 'img';

if (isset($_FILES['newFile']) && (0 == $_FILES['newFile']['error'])) {
    var_dump($_FILES['newFile']);
    $i = 0;
    $newImgAddress = IMG_ADDRESS_PART . $i . '.jpg';
    while (file_exists($newImgAddress)) {
        $i++;
        $newImgAddress = IMG_ADDRESS_PART . $i . '.jpg';
    }
    $uploadedFile = move_uploaded_file($_FILES['newFile']['tmp_name'], $newImgAddress);
    if (file_exists($newImgAddress)) {
        echo 'Файл загружен.';
    } else {
        echo 'Ошибка! Файл не загружен.';
    }
    unset($_FILES['newFile']);
}

var_dump($_FILES['newFile']);

?>

</body>
</html>