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
// $ext = ['.jpg', '.jpeg'];
// var_dump($imgNamesArray);
foreach ($imgNamesArray as $imgName) :
    if ($imgName = ~'/*\.(jpe??g|png|gif|bmp|tif{1,2})$/') :
//        echo 'ДА ';
        echo $imgName;
    /*    ?><img src="images/<?php echo $imgName; ?>" height="150px" /> <?php */
    else :
        echo 'НЕТ';
    endif;
endforeach;
?>

</body>
</html>