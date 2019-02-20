<html>
<head>
    <title> hw04-02 gallery </title>
</head>
<body>

<?php
/*  */

$imgNamesArray = scandir(__DIR__ . '/images/');
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);
$pattern = '/(cat|dog)/';
    foreach ($imgNamesArray as $imgName) :
    if (preg_match($pattern,$imgName)) {
        echo ' ДА :: ';
    } else {
        echo ' НЕТ :: ';
    }
    var_dump(preg_match($pattern, $imgName));
    echo ' :: ', $imgName, ' :: ', preg_match($pattern, $imgName);
    ?><br><?php
endforeach;
?>

</body>
</html>