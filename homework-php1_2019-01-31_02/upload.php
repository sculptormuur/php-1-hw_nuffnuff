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

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="file" name="newFile" size="70" value="" form="imgFile" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
// const IMG_ADDRESS_PART = __DIR__ . '/images/' . 'img';

if (isset($_FILES['newFile']) && (0 == $_FILES['newFile']['error'])) { // некрасиво
    var_dump($_FILES['newFile']);
    if (1 == (preg_match('/\.(jpe??g|png|gif|bmp|tif{1,2})$/i',
            $_FILES['newFile']['name'], $extensionArr))) {
        var_dump($extensionArr);
//        $newImgAddress = __DIR__ . '/images/' . uniqid() . $extensionArr[0];
        $newImgAddress = __DIR__ . '/images/' . '5c6ddc7f77678' . $extensionArr[0];
        echo $newImgAddress, ' ';
        $uploadedFile = move_uploaded_file($_FILES['newFile']['tmp_name'], $newImgAddress);

        if (file_exists($newImgAddress)) { // если с таким именем уже был файл7
            echo 'Файл загружен.';
        } else {
            echo 'Ошибка! Файл не загружен.';
        }
    } else {
        echo 'Ошибка! Файл не загружен.';
    }
    unset($_FILES['newFile']);
}

var_dump($_FILES['newFile']);

?>

</body>
</html>