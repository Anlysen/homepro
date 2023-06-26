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
    public function GoSleep() {
        echo 'Go to sleep' . "<br>";
    }
    // public function __construct()
    // {
    //     $now_time = date('Y-m-d');
    // }
}

class Supllement extends Human {
    public function CleanTeeth() {
        echo 'Clean the teeth' . "<br>";
    }
    public function GoWork() {
        echo 'Go to work' . "<br>";
    }
    public function Lanch() {
        echo 'Have lanch' . "<br>";
    }
    public function GetHome() {
        echo 'Get home' . "<br>";
    }
    public function Dinner() {
        echo 'Have dinner' . "<br>";
    }
    public function GoSleep() {
        echo 'Clean the teeth' . "<br>";
    }
}
$object = new Human();
$now_time = new Human();
print_r($now_time->format('Y/m/d s:i:H'));
echo "<pre>";
print_r($object);
echo "</pre>";


?>