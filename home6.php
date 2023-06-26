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
    public $new_date;

    public function WakeUp() {
        echo 'Wake up' . "<br>";
    }
    public function GoSleep() {
        echo 'Go to sleep' . "<br>";
    }
    public function __construct()
    {
        $this->new_date = new DateTime();
    }
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
    public function make() {
        if ($this->new_date > '07:00:00') {
            return $this->CleanTeeth();
        } elseif ($this->new_date > '08:00:00') {
            return $this->GoWork();
        } elseif ($this->new_date > '12:00:00') {
            return $this->Lanch();
        } elseif ($this->new_date > '18:00:00') {
            return $this->GetHome();
        } elseif ($this->new_date > '19:00:00') {
            return $this->Dinner();
        } elseif ($this->new_date > '22:30:00') {
            return $this->GoWork();
        }
    }
}
$supllement = new Supllement();
echo $supllement->make();



?>