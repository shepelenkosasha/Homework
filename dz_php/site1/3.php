<?php

$url = $_SERVER['SCRIPT_NAME'];
setcookie("history[four]", ++$url, time() + 3600);

echo '<a href="/site1/index.php">index-page</a>';
echo '<br>'.'<br>';

echo 'Вы посещали страници:' . "</br>";
foreach ($_COOKIE['history'] as $name => $value){
	$value = htmlspecialchars($value);
    $name = htmlspecialchars($name);
	echo $name .' - '. $value ."</br>";
}