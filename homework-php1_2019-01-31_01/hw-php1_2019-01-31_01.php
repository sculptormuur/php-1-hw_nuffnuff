<html>
<head>
    <title> hw4-01 </title>
</head>
<body>

<?php

// include
function readGuestBook()
{
    $lines = file(__DIR__ . '/files_2019-01-31_01/guest_book.txt');
    return $lines;
}

// УДАЛИТЬ ЛИШНИЕ СООБЩЕНИЯ
$stringArr = readGuestBook();

$count = 0;
foreach ($stringArr as $oneStr) :
    $count++;
    echo $count, '.  ', $oneStr, "\n", "\n";
    ?><br/><br/><?php
endforeach;
?>

<form action="homework-php1_2019-01-31_01.php" method="post" id="message">
    <textarea name="writeMessage" rows="3" maxlength="300" form="message"></textarea>
    <input name="submitMessage" type="submit" value="Отправить" form="message">
</form>
<br/>

<?php
if (isset($_POST['writeMessage'])) {
//if (null !== $_POST['writeMessage']) {
    $newMessage = $_POST['writeMessage'];
    echo $newMessage;
    array_push($stringArr, $newMessage);
    $uniString = implode('\n', $stringArr);
    //   echo "\n\n", $uniString;
    file_put_contents(__DIR__ . '/files_2019-01-31_01/guest_book.txt',
        $uniString, FILE_USE_INCLUDE_PATH);
    unset($_POST['writeMessage']);
}
?>

</body>
</html>