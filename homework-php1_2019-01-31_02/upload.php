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
?>

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
    <input type="file" name="newFile" size="70" value="" form="imgFile" accept="image/*" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const UPLOAD_ERROR = 'Ошибка! Файл не загружен.';
$errorCodeMeaningsArr = [
    1 => 'Размер принятого файла превысил максимально допустимый размер (2 МБ).',
    2 => 'Размер принятого файла превысил максимально допустимый размер (2 МБ).',
    3 => 'Загружаемый файл был получен только частично.'
];

if (isset($_FILES['newFile'])) {
    $errorCode = $_FILES['newFile']['error'];
    $errorCode = 2;
    if (0 == $errorCode) { // некрасиво
        assert((0 <= $errorCode)&&(9 > $errorCode));
        $imgType = exif_imagetype($_FILES['newFile']['tmp_name']);
        $imgExtension = image_type_to_extension($imgType);
        if (false != $imgType) {
            $newImgAddress = __DIR__ . '/images/' . uniqid() . $imgExtension;

            /* Предохранение от перезаписи в случае маловероятного совпадения имени файла. */
            $i = 0;
            while (true == (file_exists($newImgAddress))) {
                $newImgAddress = __DIR__ . '/images/' . uniqid() . $imgExtension;
                $i++;
                assert(100 >= $i);
                if (100 <= $i) { // Прерывание бесконечного цикла на всякий случай.
                    $alert = 1;
                    break;
                }
            }

            /* Если новое имя для файла не совпадает с уже занятыми, то загружаем файл. */
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
            echo 'Ошибка! Файл не является изображением.'; // исправить
        }
    } else {
        if((0 < $errorCode)&&(4 > $errorCode)) {
            echo 'Ошибка! ', $errorCodeMeaningsArr[$errorCode];
        } else {
            echo UPLOAD_ERROR;
            assert((0 < $errorCode)&&(9 > $errorCode));
        }
    }
}
?>

</body>
</html>