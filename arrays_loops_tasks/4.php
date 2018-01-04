<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach ($arr as $key => $value){
    echo $key . PHP_EOL;
}
foreach ($arr as $key => $value){
    echo $value . PHP_EOL;
}