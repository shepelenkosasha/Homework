<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$arr = ['green' => 'зеленый' , 'red' => 'красный' , 'blue' => 'голубой'];
$en = [];
$ru = [];
foreach ($arr as $item_en => $item_ru){
    $en = $item_en;
    $ru = $item_ru;
    echo $en .'<br>' ;
    echo $ru .'<br>' ;
}

