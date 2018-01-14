<?php

$url = $_SERVER['SCRIPT_NAME'];
setcookie("history[one]", ++$url, time() + 3600);

echo '<a href="/site1/1.php">1-page</a>';
echo '<br>'.'<br>';
echo '<a href="/site1/2.php">2-page</a>';
echo '<br>'.'<br>';
echo '<a href="/site1/3.php">3-page</a>';