<?php
//класс машина
class Car
{
    private $brand;
    private $color;
    private $machinetype;
    function __construct($brand,$color,$machinetype)
    {
    $this->brand = $brand;
    $this->color = $color;
    $this->machinetype = $machinetype;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getColor(){
        return $this->color;
    }
    public function getMachinetype(){
        return $this->pastethickness;
    }
    public function getInfo(){
        return "{$this->brand}" . "{$this->color}" . "{$this->machinetype}";
    }
}
$objectOne = new Car ("УАЗ-469","BLACK-GREEN","внедорожник");
    echo "Марка машины - " . $objectOne->getBrand();
    echo "Цвет машины - " . $objectOne->getColor();
    echo "Типаж машины - " . $objectOne->getMachinetype();