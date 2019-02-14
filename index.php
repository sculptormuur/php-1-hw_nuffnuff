<html>
<head>
    <title> Домашка </title>
</head>
<body>

<?php
const PARTDZ = 'homework-php1_';
const PART1 = '/homework-php1_';
const PART2 = 'hw-php1_';
/* $d - date, $t - title */
?>

<h3> Домашнее задание №7 от 2019.02.11: </h3>
<ul><?php $d = '2019-02-11_'; $t = 'homework 2019.02.11 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a></li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02</a></li>
    <li><a href="<?php echo PART1, $d, '03/', PART2, $d, '03.php'; ?>"><?php echo $t; ?>03</a></li>
    <li><a href="<?php echo PART1, $d, '04/', PART2, $d, '04.php'; ?>"><?php echo $t; ?>04</a></li>
</ul>

<h3> Домашнее задание №6 от 2019.02.07: </h3>
<ul><?php $d = '2019-02-07_'; $t = 'homework 2019.02.07 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a></li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02*</a></li>
    <li><a href="<?php echo PART1, $d, '03/', PART2, $d, '03.php'; ?>"><?php echo $t; ?>03</a></li>
    <li><a href="<?php echo PART1, $d, '04/', PART2, $d, '04.php'; ?>"><?php echo $t; ?>04*</a></li>
</ul>

<h3> Домашнее задание №5 от 2019.02.04: </h3>
<ul><?php $d = '2019-02-04_'; $t = 'homework 2019.02.04 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a></li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02</a></li>
    <li><a href="<?php echo PART1, $d, '03/', PART2, $d, '03.php'; ?>"><?php echo $t; ?>03</a></li>
    <li><a href="<?php echo PART1, $d, '04/', PART2, $d, '04.php'; ?>"><?php echo $t; ?>04</a></li>
</ul>

<h3> Домашнее задание №4 от 2019.01.31: </h3>
<ul><?php $d = '2019-01-31_'; $t = 'homework 2019.01.31 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a></li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02</a></li>
    <li><a href="<?php echo PART1, $d, '03/', PART2, $d, '03.php'; ?>"><?php echo $t; ?>03</a></li>
    <li><a href="<?php echo PART1, $d, '04/', PART2, $d, '04.php'; ?>"><?php echo $t; ?>04*</a></li>
</ul>

<h3> Домашнее задание №3 от 2019.01.28: </h3>
<ul><?php $d = '2019-01-28_'; $t = 'homework 2019.01.28 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a><?php
        ?><span class="cont"> :: $_GET['NAME'], switch(), htmlspecialchars(), isset(), <?php
            ?>&lt;input&gt;, &lt;select&gt;, &lt;option&gt;</span>
    </li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02</a><?php
        ?><span class="cont"> :: foreach, endforeach, if, endif, isset(), &lt;img&gt;</span>
    </li>
</ul>


<h3> Домашнее задание №2 от 2019.01.24: </h3>
<ul><?php $d = '2019-01-24_'; $t = 'homework 2019.01.24 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '01/', PART2, $d, '01.php'; ?>"><?php echo $t; ?>01</a><?php
        ?><span class="cont"> :: &&, ||, XOR, \t, \n</span></li>
    <li><a href="<?php echo PART1, $d, '02/', PART2, $d, '02.php'; ?>"><?php echo $t; ?>02</a><?php
        ?><span class="cont"> :: assert(), if, elseif, function()</span></li>
    <li><a href="<?php echo PART1, $d, '03/', PART2, $d, '03.php'; ?>"><?php echo $t; ?>03</a><?php
        ?><span class="cont"> :: include, var_dump(), const, __DIR__</span></li>
    <li><a href="<?php echo PART1, $d, '04/', PART2, $d, '04.php'; ?>"><?php echo $t; ?>04*</a></li>
</ul>

<h3> Домашнее задание №1 от 2019.01.21: </h3>
<ul><?php $d = '2019-01-21'; $t = 'homework 2019.01.21 '; ?>
    <li><a href="<?php echo PARTDZ, $d; ?>tz.html">Задание</a></li>
    <li><a href="<?php echo PART1, $d, '/', PART2, $d, '_03.php'; ?>"><?php echo $t; ?>03</a><?php
        ?><span class="cont"> :: var_dump(), echo</span></li>
    <li><a href="<?php echo PART1, $d, '/', PART2, $d, '_04.php'; ?>"><?php echo $t; ?>04</a><?php
        ?><span class="cont"> :: = </span></li>
    <li><a href="<?php echo PART1, $d, '/', PART2, $d, '_05.php'; ?>"><?php echo $t; ?>05</a><?php
        ?><span class="cont"> :: (boolean), true, false, var_dump()</span>
    </li>
    <li><a href="<?php echo PART1, $d, '/', PART2, $d, '_06.php'; ?>"><?php echo $t; ?>06*</a><?php
        ?><span class="cont"> :: =, XOR</span></li>
    <li><a href="<?php echo PART1, $d, '/', PART2, $d, '_07.php'; ?>"><?php echo $t; ?>07<sup>w</sup></a><?php
        ?><span
                class="cont"> :: chr()</span></li>
</ul>
</body>
</html>

<!--

<?php
echo '';
?>
-->

<!--
<?php
echo 'текст на русском языке';
?>
-->