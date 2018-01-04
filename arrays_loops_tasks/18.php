<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным*/

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$days = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$weekend = ['Суббота','Воскресенье'];
foreach ($days as $day){
    echo in_array($day, $weekend) ? "<strong>{$day}</strong>" : "{$day}" ;
}