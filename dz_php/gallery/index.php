<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Gallery PHP dz</title>
        <style>
            .letter {
                color: blue;
                font-size: 50px;
            }
            .button {
                text-transform: uppercase;
                cursor: pointer;
                font: bold 24px/24px Arial, sans-serif;
                background: #000;
                color: #fff;
                border-radius: 17px;
                padding: 10px 15px;
            }
            .button:hover {
                background: #fff;
                color: #000;
            }
        </style>
    </head>
    <body>
        <form  method="post" enctype="multipart/form-data" action="">
            <?php
            $files = getFiles();
            $groups = array_chunk($files, 3);
            ?>
            <?php foreach ($groups as $group) : ?>
                <p>
                    <?php foreach ($group as $file) : ?>
                        <img src=<?="/gallery/img/$file"?> width="200px">
                    <?php endforeach;?>
                </p>
            <?php endforeach;?>
            <h1><span class="letter">Up</span>loader</h1>
            <br>
            <b>File:</b>
            <input type="file" name="picture[]" multiple><br>
            <input type="hidden" name="MAX_FILE_SIZE" value="30">
            <br>
            <button class="button" type="submit">Upload</button>
        </form>
    </body>
</html>

<?php

/*Написать скрипт для загрузки пользовательских файлов.
При загрузке, в зависимости от типа файла – он на сервере должен помещаться в папку /doc, или /img..etc
Должно быть ограничение на прием файлов – не более 2 мб.
Ссылку на форму загрузки разместить на главной странице сайта.
После добавления файлов, при заходе на главную,
пользователь должен видеть галерею ранее загруженных картинок,
и список загруженных документов (все, что не картинки).
Код максимально писать функциями.*/
function run(){
    $files = $_FILES;
    if(!empty($files)) {
        $result = uploadImages($files);

        foreach ($result as $file => $status) {
            if ($status) {
                echo '<b>File:</b> ' . "<b><i>$file</i></b>" . ' <b>download succeeded!</b>' . "</br>";
            } else {
                echo '<b>File:</b> ' . "<b><i>$file</i></b>" . ' <b>download failed!</b>' . "</br>";
            }
        }
    }
}

function getFiles(){
    $dir =__DIR__. '/img/';
    $files = scandir($dir);
    $files = array_slice($files ,2);

    return $files;
}

function typeFile($type){
    $uploadDirImg = __DIR__ . '/img/';
    $uploadDirDoc = __DIR__ . '/doc/';
    $typeFiles = array('png', 'jpg', 'jpeg', 'gif');
    if (in_array($type,$typeFiles)) {
        $type = $uploadDirImg;
    } else {
        $type = $uploadDirDoc;
    }
    return $type;
}
function sizeFile($size){
    if($size < 2097152) {
        return true;
    }
    return false;
}
function upload($type, $name, $tmp_name, $size){
    $uploadDir = typeFile($type);

    $name = basename($name);

    if(!sizeFile($size)) {
        return false;
    }
    return move_uploaded_file($tmp_name, "$uploadDir/$name");
}
function uploadImages($files){
    $result = array();
    foreach ($files['picture']['name'] as $key => $name) {
        $nameType = explode('.', $name);
        $nameType = array_pop($nameType);
        $tmp_name = $files["picture"]["tmp_name"][$key];
        $size =  $files["picture"]["size"][$key];
        if(upload($nameType, $name, $tmp_name, $size)) {
            $result[$name] = true;
        } else {
            $result[$name] = false;
        }
    }
    return $result;
}
echo "<br/>","<br/>";

run();

