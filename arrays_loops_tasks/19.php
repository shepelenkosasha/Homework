<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$days = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$day = $days[date('N') - 1];
foreach ($days as $value){
    echo $value == $day ? "<em>{$value}</em><br/>" : "{$value}<br/>";
}