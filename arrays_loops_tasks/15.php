<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$arr = ['4','2','5','19','13','0','10'];
$count = 0;
foreach ($arr as $value) {
    $count ++;
}
echo $count;
