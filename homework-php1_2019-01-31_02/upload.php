<html>
<head>
    <title> hw04-02 upload </title>
</head>
<body>

<?php
/* надо ли проверять тип файла? // ["type"] => "image/jpeg"
 * надо ли написать switch для разных расширений?
 * огранчить ли количество загруженных файлов?
 * */

?>
<!-- надо ли делать форму на ЭТОЙ странице? -->

<form action="upload.php" method="post" id="imgFile" enctype="multipart/form-data">
    <input type="file" name="newFile" size="70" value="" form="imgFile" required />
    <input name="submitFile" type="submit" value="Отправить" form="imgFile">
</form>

<?php
const IMG_ADDRESS_PART = __DIR__ . '/images/' . 'img';

if (isset($_FILES['newFile']) && (0 == $_FILES['newFile']['error'])) {
    $i = 0;
    $newImgAddress = IMG_ADDRESS_PART . $i . '.jpg';
    while (file_exists($newImgAddress)) { // ограничить ли перебор? // //(10 > $i) &&
        $i++;
        $newImgAddress = IMG_ADDRESS_PART . $i . '.jpg';
    }
    $uploadedFile = move_uploaded_file($_FILES['newFile']['tmp_name'], $newImgAddress);
    echo 'Файл загружен.';
} elseif (!file_exists($newImgAddress)) {
    echo 'Ошибка! Файл не загружен.';
}

?>

</body>
</html>