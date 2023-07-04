<?php

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
        $time1 = new DateTime('07:00:00');
        if ($this->new_date >= $time1 && $this->new_date <= new DateTime('08:00:00')) {
            return $this->CleanTeeth();
        } elseif ($this->new_date > new DateTime('08:00:00') && $this->new_date <= new DateTime('12:00:00')) {
            return $this->GoWork();
        } elseif ($this->new_date > new DateTime('12:00:00') && $this->new_date <= new DateTime('18:00:00')) {
            return $this->Lanch();
        } elseif ($this->new_date > new DateTime('18:00:00') && $this->new_date <= new DateTime('19:00:00')) {
            return $this->GetHome();
        } elseif ($this->new_date > new DateTime('19:00:00') && $this->new_date <= new DateTime('22:00:00')) {
            return $this->Dinner();
        } elseif ($this->new_date > new DateTime('22:00:00') && $this->new_date <= new DateTime('23:59:59')) {
            return $this->GoWork();
        }
    }
}


$supllement = new Supllement();
echo $supllement->make();




?>