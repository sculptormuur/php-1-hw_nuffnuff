<html>
<head>
    <title> hw04-02 </title>
</head>
<body>

<?php

$imgNamesArray = scandir(__DIR__ . '/images/');
unset($imgNamesArray[(array_search('.', $imgNamesArray))]);
unset($imgNamesArray[(array_search('..', $imgNamesArray))]);
array_values($imgNamesArray);

/* foreach($imgNamesArray as $index => $imgName) :
    if(1 < $index) :
        ><img src="images/<?php echo $imgNamesArray[$i]; ?>" height="150px"/> <?php
    endif;
   endforeach; */

var_dump($imgNamesArray);

$i = 0;
while (count($imgNamesArray) > $i) :
    ?><img src="images/<?php echo $imgNamesArray[$i]; ?>" height="150px"/> <?php
    $i++;
endwhile;
?>

</body>
</html>