<html>
<head>
    <title> test </title>
</head>
<body>

<pre>
<?php


function mb_strcasecmp($str1, $str2, $encoding = null) {
    if (null === $encoding) { $encoding = mb_internal_encoding(); }
    return strcmp(mb_strtoupper($str1, $encoding), mb_strtoupper($str2, $encoding));
}
/* strcasecmp: мёд > мЁд (1), мед > мЕд (32), мад > мАд (32),
 * мпд > мПд (32), мgд = мGд (0),  е > Е (32), ё > Ё (1)
 * */
$str1 = 'ё';
$str2 = 'Ё';
$result = mb_strcasecmp($str1, $str2);
if ($result < 0) {
    echo $str1 . ' < ' . $str2, PHP_EOL;
} elseif ($result > 0) {
    echo $str1 . ' > ' . $str2, PHP_EOL;
} else {
    echo $str1 . ' = ' . $str2, PHP_EOL;
}
echo $result;

//var_dump(1);
//var_dump(2);
//var_dump('е');
//var_dump('ё');
//var_dump('Е');
//var_dump('Ё');
//var_dump(strcasecmp('е', 'ё'));
//var_dump(strcasecmp('Е', 'Ё'));
//var_dump(mb_ord('е'));
//var_dump(mb_ord('ё'));
//var_dump(mb_ord('Е'));
//var_dump(mb_ord('Ё'));

?>
</pre>

</body>
</html>