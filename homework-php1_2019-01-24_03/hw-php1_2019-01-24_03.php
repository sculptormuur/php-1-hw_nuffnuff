<html>
<head>
    <title> hw03 </title>
</head>
<body>

<pre>
<?php
const SUBDIR = __DIR__ . '/files_2019-01-24_03/' ;

/* Т. к. файл nofile.php не существует и потому не включается, */
/* оператор include вернёт FALSE. */
$test1 = include SUBDIR . 'nofile.php';
echo 'nofile:', "\t", "\t";
var_dump($test1); // bool(false)

/* Файл empty.php удалось включить, поэтому, хотя он и пустой, */
/* оператор include вернёт целое 1. */
$test2 = include SUBDIR . 'empty.php';
echo 'empty:', "\t", "\t";
var_dump($test2); // int(1)

/* Файл only_vars.php включается и содержит переменные, но не возвращает */
/* значений ни одной из них, поэтому оператор include вернёт целое 1. */
$test3 = include SUBDIR . 'only_vars.php';
echo 'only_vars:', "\t";
var_dump($test3); // int(1)

/* Оператор include вернёт значение переменной $var3, т. к. файл return_var.php */
/* содержит выражение "return $var3;". */
$test4 = include SUBDIR . 'return_var.php';
echo 'return_var:', "\t";
var_dump($test4); // string(21) "переменная3"
?>
</pre>

</body>
</html>