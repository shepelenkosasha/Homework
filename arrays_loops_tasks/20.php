<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$a = 'X' ;
for ($i =0 ; $i<20 ; $i ++ , $a = $a.'X' ){
    echo "{$a}<br/>";
}