<?php
$result = 0;
$power = 2;
foreach ([26,17,136,12,79,15] as $item){
    $result += $item ^ $power ;
}
echo $result;