<?php
$n = 1000;
for ($i = 1 ; true ; $i ++){
    $n /= 2;
    if ($n < 50){
        $num = $n;
        echo $num.'<br>' , $i;
        break;
    }
}