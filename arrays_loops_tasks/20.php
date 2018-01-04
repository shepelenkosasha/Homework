<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx*/

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$a = 'X' ;
for ($i =0 ; $i<20 ; $i ++ , $a = $a.'X' ){
    echo "{$a}<br/>";
}