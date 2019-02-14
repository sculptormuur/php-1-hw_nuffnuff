<?php
/* скрипт-обработчик, который, приняв данные с основной страницы, дополняет массив
 * новым элементом а записывает элементы массива в файл */

require_once __DIR__ . '/functions.php';
$stringArr = readGuestBook();

assert(isset($stringArr));
assert(is_array($stringArr));

if (!empty($_POST['writeMessage'])) {
    $newMessage = PHP_EOL . $_POST['writeMessage'];
    array_push($stringArr, $newMessage); // добавляем элемент в конец массива
    $uniString = implode('', $stringArr); // соединяем элементы в строку
    file_put_contents(__DIR__ . '/files/guest_book.txt',
        $uniString, FILE_USE_INCLUDE_PATH); // перезаписываем исходный файл
}

header('Location: http://homework.com/homework-php1_2019-01-31_01/hw-php1_2019-01-31_01.php');