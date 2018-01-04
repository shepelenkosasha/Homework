<?php
/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
 С помощью цикла foreach выведите эти слова в столбик*/
$items = ['html','css','php','js','jq'];

foreach ($items as $value) {
    echo $value . "<br/>";
}