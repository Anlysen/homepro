<?php

abstract class Human {
    abstract public function getAll($human);
}

class Teenager extends Human {
    public function getAll($human) {
        echo "Some text" . "<br>";
    }
}

class Child extends Human {
    public function getAll($human) {
        echo "Some text" . "<br>";
    }
}

class Student extends Human {
    public function getAll($human) {
        echo "Some text" . "<br>";
    }
}

class Pensioner extends Human {
    public function getAll($human) {
        echo "Some text" . "<br>";
    }
}

$obj = new Teenager();
var_dump($obj instanceof Teenager);

$obj = new Child();
var_dump($obj instanceof Child);

$obj = new Student();
var_dump($obj instanceof Student);

$obj = new Pensioner();
var_dump($obj instanceof Pensioner);

?>