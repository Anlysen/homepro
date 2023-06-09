<?php
$cat = [
    'age' => 1,
    'eat' => function () {
        echo 'cat eat';
    }
];
//echo $cat['eat']() . "<br>";




class Cat {
    public $age = 1;
    public function eat() {
        $this->age++;
    }
}
$cat = new Cat();
$cat->eat();
//echo $cat->age . "<br>";





class Animal{
    private $lion;
    private $rebbit;

    public function setLion($lion) {
        $this->lion = $lion;
    }
    public function setRebbit($rebbit) {
        $this->rebbit = $rebbit;
    }
    public function getLion() {
        return $this->lion;
    }
    public function getRebbit() {
        return $this->rebbit;
    }
    public function Animals() {
        return $this->getLion() . " stronger, then " . $this->getRebbit();
    }
}
$animals = new Animal;
$animals->setLion('Simba');
$animals->setRebbit('Bugs Bunny');
echo $animals->Animals();



?>