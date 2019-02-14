<?php
/* функция, которая читает файл guest_book.txt и возвращает массив из его строк */
function readGuestBook()
{
    $guestBookNotes = file(__DIR__ . '/files/guest_book.txt');
    return $guestBookNotes;
}