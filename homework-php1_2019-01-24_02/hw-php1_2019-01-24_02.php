<html>
<head>
    <title> hw02 </title>
</head>
<body>

<pre>
<?php

/*   assert_options(ASSERT_ACTIVE,   true);
   assert_options(ASSERT_WARNING,  true);
   assert_options(ASSERT_QUIET_EVAL,false);
   assert_options(ASSERT_BAIL,     false); */
//    assert(0 == $a);

/* функция, вычисляющая дискриминант */
function discrim($a, $b, $c) {
    $d = $b ** 2 - 4 * $a * $c;
    return $d;
}

$a = 0;
$b = 0;
$c = 0;
$d = discrim($a, $b, $c);
echo 'Квадратное уравнение: ', $a, 'x^2 + ', $b, 'x + ', $c, ' = 0', "\n";
echo 'Дискриминант: D = b^2 - 4ac   =', "\n", "\t", "\t", '=   ';
echo $b, '^2 - 4*', $a, '*', $c, '  =  ', $d, "\n", "\n";

if (!(0 == $a)) {
    if (0 < $d) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo 'Количество корней: 2', "\n";
        echo 'x[1] = ', $x1, "\n", 'x[2] =', $x2;
    } elseif (0 == $d) {
        $x = (-$b) / (2 * $a);
        echo 'Количество корней: 1', "\n";
        echo 'x = ', $x;
    } else {
        echo 'Данное квадратное уранение не имеет корней.';
    }
} else {
    echo 'Данное уранение не является квадратным.';
}
?>
</pre>


</body>
</html>