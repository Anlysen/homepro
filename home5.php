<?php

class Basket {
    private $bread;
    private $milk;
    private $butter;
    private $herbs;
    private $cheese;
    private $eggs;
    private $potatoes;

    public function __construct()
    {
        $this->bread = 1;
        $this->milk = 1;
        $this->butter = 1;
        $this->herbs = 1;
        $this->cheese = 1;
        $this->eggs = 1;
        $this->potatoes = 1;
    }

    public function __destruct()
    {
        echo "Removing products from the basket!" . "<br>";
    }

    public function getBread() {
        return $this->bread;
    }
    public function getMilk() {
        return $this->milk;
    }
    public function getButter() {
        return $this->butter;
    }
    public function getHerbs() {
        return $this->herbs;
    }
    public function getCheese() {
        return $this->cheese;
    }
    public function getEggs() {
        return $this->eggs;
    }
    public function getPotatoes() {
        return $this->potatoes;
    }
}
$total = new Basket();
echo $total->getBread() ."<br>";
echo $total->getMilk() ."<br>";
echo $total->getButter() ."<br>";
echo $total->getHerbs() ."<br>";
echo $total->getCheese() ."<br>";
echo $total->getEggs() ."<br>";
echo $total->getPotatoes() ."<br>";

?>