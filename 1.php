<?php
//класс мясорубка
class meatGrinder{
    private $brand;
    private $power;
    function __construct($brand,$power){
    $this->brand = $brand;
    $this->power = $power;
    }
    public function getBrand(){
    return $this->brand;
    }
    public function getPower(){
    return $this->power;
    }
    public function getInfo(){
    return "{$this->brand}" . "{$this->power}";
    }
    }
    $objectOne = new meatGrinder("Bosch",800);
    echo "Марка - " . $objectOne->getBrand();
    echo "Мощность - " . $objectOne->getPower();