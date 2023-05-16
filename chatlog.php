<?php

echo '<h1>Вывод содержимого файла</h1>';
$file = 'chatlog.txt';
$text = file_get_contents($file);
echo $text . "<hr>";


echo '<h1>Разбиваем строку файла на массивы</h1>';
$Arr_txt = explode(' , ' , $text);
echo '<pre>';
print_r($Arr_txt);
echo '</pre>';
echo "<hr>";


echo '<h1>Вывод информации из массива</h1>';
foreach ($Arr_txt as $Arr => $val) {
    echo $Arr[0] . "=" . $val[0];
}


?>