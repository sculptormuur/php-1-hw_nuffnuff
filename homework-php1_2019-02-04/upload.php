<html>
<head>
    <title> hw5 upload </title>
</head>
<body>

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152"/>
    <input type="file" name="newFile" size="70" value="" form="imgFile" accept="image/*" required/>
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const UPLOAD_ERROR = 'Ошибка! Файл не загружен.';
const IMG_PATH = __DIR__ . '/../homework-php1_2019-01-31_02/images/';

if (isset($_FILES['newFile'])) {
    $errorCode = $_FILES['newFile']['error'];
    assert(0 == $errorCode);
    if (0 != $errorCode) {
        echo UPLOAD_ERROR;
    } else {
        /* Проверка во избежание загрузки не изображения. */
        $imgType = exif_imagetype($_FILES['newFile']['tmp_name']);

        /* Присваиваем переменной исходное имя файла. */
        $imgName = $_FILES['newFile']['name'];

        assert(false != $imgType);
        if (false == $imgType) {
            echo 'Ошибка! Файл не является изображением.';
        } else {
            $newImgAddress = IMG_PATH . $imgName;

            /* Если новое имя для файла не совпадает с уже занятыми, то перемещаем файл. */
            if (file_exists($newImgAddress)) {
                echo 'Ошибка! Файл с таким именем уже существует.';
            } else {
                $uploadedFile = move_uploaded_file($_FILES['newFile']['tmp_name'], $newImgAddress);
                /* Проверка на случай ошибки при перемещении. */
                if (file_exists($newImgAddress)) {
                    echo 'Файл загружен.';
                } else {
                    echo UPLOAD_ERROR;
                }
            }
        }
    }
}
?>

</body>
</html>