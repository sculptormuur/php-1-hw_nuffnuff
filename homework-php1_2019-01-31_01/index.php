<html>
<head>
    <title> hw4-01 </title>
</head>
<body>

<?php
/* Домашняя работа №4. Задание №1. */

require_once __DIR__ . '/functions.php';
$guestBookNotes = readGuestBook();

/* выводим массив из строк гостевой книги */
foreach ($guestBookNotes as $oneNote) :
    echo $oneNote;
    ?><br/><br/><?php
endforeach;
?>

<form action="action.php" method="post" id="Note">
    <input type="text" name="newNote" size="70" value="" form="Note" />
    <input name="submitNote" type="submit" value="Отправить" form="Note">
</form>
<br/>

</body>
</html>