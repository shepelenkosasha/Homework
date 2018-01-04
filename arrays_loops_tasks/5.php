<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$arr = ['Коля' => '200' , 'Вася' => '300' , 'Петя' => '400'];

foreach ($arr as $key => $value){
    echo "$key — зарплата $value долларов.".PHP_EOL;
}