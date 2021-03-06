<html>
<head>
    <title> hw04-02 upload </title>
</head>
<body>

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
    <input type="file" name="newFile" size="70" value="" form="imgFile" accept="image/*" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const UPLOAD_ERROR = 'Ошибка! Файл не загружен.';

if (isset($_FILES['newFile'])) {
    $errorCode = $_FILES['newFile']['error'];
    assert(0 == $errorCode);
    if (0 == $errorCode) {
        /* Проверка во избежание загрузки не изображения. */
        $imgType = exif_imagetype($_FILES['newFile']['tmp_name']);
        $imgExtension = image_type_to_extension($imgType);

        assert(false != $imgType);
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
            echo 'Ошибка! Файл не является изображением.';
        }
    }  else {
        echo UPLOAD_ERROR;
    }
}
?>

</body>
</html>