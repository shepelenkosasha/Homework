<?php
/* Создать форму с двумя элементами textarea.
При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
которая будет возвращать массив с общими словами. */
include "index.html";
$a = $_POST ['a'];
$b = $_POST ['b'];
$result = getCommonWords($a, $b);

function getCommonWords($a, $b)
{
    $items1 = explode(' ', $a);
    $items2 = explode(' ', $b);

    foreach ($items1 as $item1) {
        foreach ($items2 as $item2) {
            if ($item2 === $item1) {
                $result[] = $item1;
            }
        }
    }
    return($result);
}
print_r($result);