<?php

//class Foo {
//    public function printItem($str) {
//        echo 'Foo: ' . $str . PHP_EOL . "<br>";
//    }
//    public function printPHP() {
//        echo 'PHP is the best lenguage!' . PHP_EOL . "<br>";
//    }
//}
//
//class Bar extends Foo {
//    public function printItem($str) {
//        echo 'Bar: ' . $str . PHP_EOL . "<br>";
//    }
//}
//
//$foo = new Foo();
//$bar = new Bar();
//$foo->printItem('baz');
//$foo->printPHP();
//$bar->printItem('baz');
//$bar->printPHP();

/* Resoult:
Foo: baz
PHP is the best lenguage!
Bar: baz
PHP is the best lenguage!
*/





class Human {
    public $name = 'Alex';
    public $gender = 'Man';
    public $age = 30;
    public $hobbies = 'sport';

    public function WakeUp() {
        echo 'Wake up' . "<br>";
    }
    public function go_sleep() {
        echo 'Go to sleep' . "<br>";
    }
    public function __construct()
    {
        
    }
}

class Supllement extends Human {
    public function clean_teeth() {
        echo 'Clean the teeth' . "<br>";
    }
    public function go_work() {
        echo 'Go to work' . "<br>";
    }
    public function lanch() {
        echo 'Have lanch' . "<br>";
    }
    public function get_home() {
        echo 'Get home' . "<br>";
    }
    public function dinner() {
        echo 'Have dinner' . "<br>";
    }
    public function go_sleep() {
        echo 'Clean the teeth' . "<br>";
    }
}

?>