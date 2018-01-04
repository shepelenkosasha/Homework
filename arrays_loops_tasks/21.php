<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

for($i = 1; $i <= 9; $i ++){
    for($q = 1; $q <= $i ; $q ++) {
        echo $i;
    }echo "<br/>";
}