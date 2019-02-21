<?php
/* скрипт-обработчик, который, приняв данные с основной страницы, дополняет массив
 * новым элементом а записывает элементы массива в файл */

require_once __DIR__ . '/functions.php';
$guestBookNotes = readGuestBook();

assert(isset($guestBookNotes));
assert(is_array($guestBookNotes));

if (!empty($_POST['newNote'])||(0 == $_POST['newNote'])) {
    $guestBookNotes[] = $_POST['newNote'];
    $uniString = implode(PHP_EOL, $guestBookNotes); // соединяем элементы в строку
    file_put_contents(__DIR__ . '/files/guest_book.txt',
        $uniString, FILE_USE_INCLUDE_PATH); // перезаписываем исходный файл
}

header('Location: http://homework.com/homework-php1_2019-01-31_01/index.php');