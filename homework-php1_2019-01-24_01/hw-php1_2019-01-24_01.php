<html>
<head>
    <title> hw01 </title>
</head>
<body>

<h3>Таблица истинности для &amp;&amp;</h3>

<pre><?php
    /* создаём таблицы истинности для &&, || и для XOR */
    
    /* функция возвращает строку, иллюстрирующую логическое значение */
    function trufy($arg) { //ПОМЕНЯТЬ НАЗВАНИЕ
        switch ($arg) {
            case true:
                $res = 'true';
                break;
            case false:
                $res = 'false';
                break;
                default:
                $res = 'error'; // УБРАТЬ ЛИШНЕЕ
                break;
        };
        return $res;
    };

    $cap1 = "\t" . 'a' . "\t" . 'b' . "\t" . "\t" . 'a '; // 1-ая неизменяемая часть заголовка
    $cap2 = '&amp;&amp'; // часть заголовка с операцией
    $cap3 = ' b' . "\n" . "\n";  // 2-ая неизменяемая часть заголовка
    
    /* таблица истинности для && */
    echo $cap1, $cap2, $cap3; // заголовок
    echo "\t", trufy($a = true), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a && $b)), "\n" ;
    echo "\t", trufy($a = true), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a && $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a && $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a && $b)), "\n" ;
    ?>
</pre>


<h3>Таблица истинности для ||</h3>

<pre><?php
    $cap2 = '||';
    echo $cap1, $cap2, $cap3; // заголовок
    echo "\t", trufy($a = true), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a || $b)), "\n" ;
    echo "\t", trufy($a = true), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a || $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a || $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a || $b)), "\n" ;
    ?>
</pre>


<h3>Таблица истинности для XOR</h3>

<pre><?php
    $cap2 = 'XOR';
    echo $cap1, $cap2, $cap3; // заголовок
    echo "\t", trufy($a = true), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a XOR $b)), "\n" ;
    echo "\t", trufy($a = true), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a XOR $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = true), "\t", "\t", trufy($c = ($a XOR $b)), "\n" ;
    echo "\t", trufy($a = false), "\t", trufy($b = false), "\t", "\t", trufy($c = ($a XOR $b)), "\n" ;
    ?>
</pre>

</body>
</html>