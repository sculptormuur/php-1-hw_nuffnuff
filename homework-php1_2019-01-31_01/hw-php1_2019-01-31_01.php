<html>
<head>
    <title> hw4-01 </title>
</head>
<body>

<?php
/* Домашняя работа №4. Задание №1. */

require_once __DIR__ . '/functions.php';
$stringArr = readGuestBook();

/* выводим массив из строк гостевой книги */
$i = 0;
foreach ($stringArr as $oneString) :
    $i++;
    echo $i, '.  ', $oneString, PHP_EOL, PHP_EOL;
    ?><br/><br/><?php
endforeach;
?>

<form action="action.php" method="post" id="message">
    <input type="text" name="writeMessage" size="70" value="" form="message" />
    <input name="submitMessage" type="submit" value="Отправить" form="message">
</form>
<br/>

</body>
</html>