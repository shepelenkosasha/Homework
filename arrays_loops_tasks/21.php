<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555*/

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

for($i = 1; $i <= 9; $i ++){
    for($q = 1; $q <= $i ; $q ++) {
        echo $i;
    }echo "<br/>";
}