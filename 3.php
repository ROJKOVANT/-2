<?php
//класс собака
class Dog
{
    private $breed;
    private $age;
    private $name;
    private $theweight;
    private $height;
    function __construct($breed,$age,$name,$theweight,$height)
    {
    $this->breed = $breed;
    $this->age = $age;
    $this->name = $name;
    $this->theweight = $theweight;
    $this->height = $height;
    }
    public function getBreed(){
        return $this->breed;
    }
    public function getAge(){
        return $this->age;
    }
    public function getName(){
        return $this->pastethickness;
    }
    public function getTheweight(){
        return $this->theweight;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getInfo(){
        return "{$this->breed}" . "{$this->age}" . "{$this->name}" . "{$this->theweight}" . "{$this->height}";
    }
}
$objectOne = new Dog ("Немецкая офчарка",2,"Мухтар",10,1.1);
    echo "порода  - " . $objectOne->getBreed();
    echo "возраст - " . $objectOne->getAge();
    echo "имя - " . $objectOne->getName();
    echo "вес кг - " . $objectOne->getTheweight();
    echo "рост см - " . $objectOne->getHeight();