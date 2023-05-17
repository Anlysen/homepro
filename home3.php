<?php


$name = $_POST['name'];
$surname = $_POST['surname'];

if (($name >= 5) && ($name <= 11)) {
    echo 'Доброе утро' . $name . '!' . "<br>";
} elseif (($name >= 11) && ($name <= 16)) {
    echo 'Добрый день' . $name . '!' . "<br>";
} elseif (($name >= 16) && ($name <= 24)) {
    echo 'Добрый вечер' . $name . '!' . "<br>";
} elseif (($name >= 0) && ($name <= 5)) {
    echo 'Доброй ночи' . $name . '!' . "<br>";
} else {
    'Доброе утро' . $name . '!' . "<br>";
}

echo date_default_timezone_get('Russia/Moscow') . "<br>";


?>