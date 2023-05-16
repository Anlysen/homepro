<?php

if (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp2/' .
$_FILES['filename']['name'])) {
    if ($_FILES['filename']['size'] > 2 * 1024 * 1024) {
        exit ('Размер файла превышает 2 мегабайта');
} else {
    echo 'Файл скопирован на сервер! <br>';
    echo 'Имя файла <br>';
    echo $_FILES['filename']['name'] . '<br>';
    echo 'Размер файла <br>';
    echo $_FILES['filename']['size'] . '<br>';
    echo 'Тип файла <br>';
    echo $_FILES['filename']['type'] . '<br>';
    }
}







?>