<html>
<head>
    <title> hw01 </title>
</head>
<body>
<a href="/homework-php1_2019-01-28_01.php">Обновить страницу</a><br/>
<form action="homework-php1_2019-01-28_01.php" method="get">

    <?php
    /* делаем примитивный мини-калькулятор из двух полей ввода чисел,  */
    /* селектора с выбором операции и кнопки "=" */

    $a = $_GET['1']; // получаем значение из первого поля для числа
    $b = $_GET['2']; // получаем значение из второго поля для числа
    /* получаем обозначение знака операции и преобразуем его в последовательность HTML-сущностей */
    $op = htmlspecialchars($_GET['sign']);

    if ((is_numeric($a)) && (is_numeric($b))) { // проверяем являются ли значения числами
        /* производим операцию в зависимости от выбранного знака */
        switch ($op) {
            case 'plus':
                $res = $a + $b;
                break;
            case 'minus':
                $res = $a - $b;
                break;
            case 'times':
                $res = $a * $b;
                break;
            case 'divide':
                $res = $a / $b;
                break;
            case '37':
                $res = $a % $b;
                break;
            case '94':
                $res = pow($a, $b);
                break;
            default:
                $res = 'Ошибка. Выбрана неизвестная операция.';
        }
        /* если значения получены, но хотя бы одно из них нечисловое, то выводится сообщение: */
    } elseif ((isset($_GET['1'])) && (isset($_GET['2']))) {
        $res = 'Ошибка. Введите числа.';
    }
    ?>
    <input type="text" name="1" value="<?php
    /* если мы уже получили 1-е число, то сохраняем его в поле ввода */
    if (isset($_GET['1'])) {
        echo $a;
    }
    ?>" required/>
    <select size="6" name="sign" required>
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="times">×</option>
        <option value="divide">÷</option>
        <option value="37">%</option>
        <option value="94">^</option>
    </select>
    <input type="text" name="2" value="<?php
    if (isset($_GET['2'])) { // сохраняем в поле 2-е число
        echo $b;
    }
    ?>" required/>
    <input type="submit" value="&#61;"/> <?php
    echo $res; // выводим результат операции сразу после кнопки
    ?>

</form>
</body>
</html>