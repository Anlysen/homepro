<?php


function Greetig_by_time() {
    $hours = date("H");
    if (($hours >= 0) && ($hours < 5)) {
        echo "Доброй ночи, ";
    } elseif (($hours >= 10) && ($hours < 18)) {
        echo "Добрый день, ";
    } elseif (($hours >= 18) && ($hours < 24)) {
        echo "Добрый вечер, ";
    } else {
        echo "Доброе утро, ";
    }
}
echo Greetig_by_time();





if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}

echo $name . " " . $surname . "!" . "<br>";


echo "<hr>";

echo "<h1>Сведенья о пользователе</h1><br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>"; 





$ip = $_SERVER['REMOTE_ADDR'];
$file = file('./ip.txt');

if (in_array($ip, $file)) {
    echo 'Вы уже посещали эту страницу!';
} else {
    file_put_contents('ip.txt', $ip, FILE_APPEND);
}



?>