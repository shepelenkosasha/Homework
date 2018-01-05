<?php
/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.*/
include "index.html";
$a = $_POST['a'];
$result = a_long_words($a);

function a_long_words($a){
    $words = explode(' ', $a);
    foreach ($words as $word){
        $result[$word] = mb_strlen($word);
        arsort($result);
        $result = array_slice($result,0,3);
    }

}
print_r($result);





