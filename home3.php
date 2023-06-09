<?php

// Вычисление в функции
class Num_1{
    private $a;
    private $b;
    public function setNum1($a){
        $this->a = $a;
    }
    public function setNum2($b){
        $this->b = $b;
    }
    public function getNum1(){
        return $this->a;
    }
    public function getNum2(){
        return $this->b;
    }
    
    public function multiply(){
        return $this->getNum1() * $this->getNum2();
    }
    public function del(){
        return $this->getNum1() / $this->getNum2();
    }
    public function sum(){
        return $this->getNum1() + $this->getNum2();
    }
    public function getfunc(){
        return $this->getNum1();
    }
    //Очистка
    //public function delet(){
    //    $this->getNum1();
    //    return unset(getNum1());
    //}
    }
    $Num_cl = new Num_1;
    $Num_cl->setNum1(10);
    $Num_cl->setNum2(5);
    
    echo  $Num_cl->multiply() . "<br>";
    echo  $Num_cl->sum() . "<br>";
    echo  $Num_cl->del() . "<br>";
    echo  $Num_cl->getfunc() . "<br>";
    //echo  $Num_cl->delet() . "<br>";






?>