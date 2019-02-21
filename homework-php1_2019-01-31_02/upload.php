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
    <input type="file" name="newFile" size="70" value="" form="imgFile" accept="image/*" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const UPLOAD_ERROR = 'Ошибка! Файл не загружен.';

if (isset($_FILES['newFile']) && (0 == $_FILES['newFile']['error'])) { // некрасиво
    var_dump($_FILES['newFile']);
    if (false !== (stripos($_FILES['newFile']['type'], 'image'))) {
        $dudu = exif_imagetype($_FILES['newFile']['tmp_name']);
        var_dump(image_type_to_extension($dudu));
        if (1 == (preg_match('/\.[a-z,A-Z]{1,4}$/i', // переделать?
                $_FILES['newFile']['name'], $extensionArr))) {
            var_dump($extensionArr);
            $newImgAddress = __DIR__ . '/images/' . uniqid() . $extensionArr[0];
//            $newImgAddress = __DIR__ . '/images/' . '5c6ddc7f77678' . $extensionArr[0];
            echo $newImgAddress, ' ';

            /* Предохранение от перезаписи в случае маловероятного совпадения имени файла. */
            $i = 0;
            while (true == (file_exists($newImgAddress))) {
                $newImgAddress = __DIR__ . '/images/' . uniqid() . $extensionArr[0];
                $i++;
//                echo ' цикл ', $i;
                assert(100 >= $i);
                if (100 <= $i) { // Прерывание бесконечного цикла на всякий случай.
                    $alert = 1;
                    break;
                }
            }

            /* Если новое имя для файла не совпадает с уже существующим, то загружаем файл. */
            if (!isset($alert)) {
                $uploadedFile = move_uploaded_file($_FILES['newFile']['tmp_name'], $newImgAddress);
                /* Проверка на случай ошибки при загрузке. */
                if (file_exists($newImgAddress)) {
                    echo 'Файл загружен.';
                } else {
                    echo UPLOAD_ERROR;
                }
            } else {
                echo UPLOAD_ERROR;
            }
        } else {
            echo UPLOAD_ERROR;
        }
    } else {
        echo ' НЕ КАРТИНКА '; // исправить
    }
    unset($_FILES['newFile']);
}

var_dump($_FILES['newFile']);

?>

</body>
</html>