<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$arr = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
$month = $arr[date('n')];
foreach ($arr as $key => $value){
    echo $value == $month ? "<strong>{$value}</strong><br/>" : "{$value}<br/>";

}