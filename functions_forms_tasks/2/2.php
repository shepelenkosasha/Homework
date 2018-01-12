<?php
/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.*/
include "index.html";
$a_long_words = $_POST['a'];
$result = $a_long_words;

function test($a_long_words){
    $result = explode(' ', $a_long_words);
    foreach ($result as $word){
        $result[$word] = mb_strlen($word);
        arsort($result);
    }
    return (array_slice($result,0,3));
}
print_r (test($a_long_words));





