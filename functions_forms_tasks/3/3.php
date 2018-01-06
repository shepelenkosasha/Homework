<?php
/*Есть текстовый файл.
Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение*/
include "index.html";

$word_length = $_POST['length'];
$result = test($word_length);

function test($word_length) {
    $words = explode(' ', $word_length);
    $result = [];
    foreach ($words as $word){
        $maxLength = $_POST['maxLength'];
        if (mb_strlen($word) < $maxLength){
            $result[] = $word;
        }
    }
    return implode(' ',$result);
}
print_r($result);