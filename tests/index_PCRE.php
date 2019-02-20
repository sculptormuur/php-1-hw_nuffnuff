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
$pattern = '/\.(jpe??g|png|gif|bmp|tif{1,2})$/';
// $pattern = '~(cat|dog)~';
// $pattern = 'g';
foreach ($imgNamesArray as $imgName) :
//    if (false !== (stripos($imgName, $pattern))) :
    if (1 == (preg_match($pattern, $imgName))) :
//    if (false !== (preg_grep($pattern, $imgName))) :
        echo ' ДА :: ';
    else :
        echo ' НЕТ :: ';
    endif;
//    var_dump(stripos($imgName, $pattern));
//    echo ' :: ', $imgName, ' :: ', stripos($imgName, $pattern);
    var_dump(preg_match($pattern, $imgName));
    echo ' :: ', $imgName, ' :: ', preg_match($pattern, $imgName);
    ?><br><?php
endforeach;
?>

</body>
</html>