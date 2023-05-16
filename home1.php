<?php

if (!empty($_POST)) { 
    if (empty($_POST['fio'])) { 
        $errors[] = 'Строка пустая';
    } 
    if (empty($_POST['age'])) { 
        $errors[] = 'Поле age пустое';
    } elseif (!is_numeric($_POST['age'])) { 
        $errors[] = 'Поле age не содержит цифры';
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<strong>$err</strong><br>";
        }
    } else {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
}



?>