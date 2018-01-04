<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$a = 'XX' ;
for ($i =0 ; $i<5; $i ++ , $a = $a.'XX' ){
    echo "{$a}<br/>";
}