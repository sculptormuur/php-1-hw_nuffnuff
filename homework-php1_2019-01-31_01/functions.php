<?php
/* функция, которая читает файл guest_book.txt и возвращает массив из его строк */
function readGuestBook()
{
    return file(__DIR__ . '/files/guest_book.txt', FILE_IGNORE_NEW_LINES);
}