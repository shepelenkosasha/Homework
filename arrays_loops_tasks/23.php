<!DOCTYPE html>
<html>
<head>
    <title>23 PHP</title>
    <meta charset="utf-8" >
</head>
<body>
    <form method="get">
        <input type="text" name="num">
        <button type="submit"><b>GO</b></button>
    </form>
</body>
</html>


<?php
/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.*/


$num = $_GET['num'];
$sum = str_split($num);
$sum = array_sum($sum);

echo $sum;

