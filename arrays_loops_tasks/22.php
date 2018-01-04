<?php
/*Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx*/

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

$a = 'XX' ;
for ($i =0 ; $i<5; $i ++ , $a = $a.'XX' ){
    echo "{$a}<br/>";
}