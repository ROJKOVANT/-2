<?php
//класс Отвертка
class Screwdriver
{
    private $type;
    private $length;
    private $witch;
    function __construct($type,$length,$witch)
    {
    $this->type = $type;
    $this->length = $length;
    $this->witch = $witch;
    }
    public function getType(){
        return $this->type;
    }
    public function getLength(){
        return $this->length;
    }
    public function getWitch(){
        return $this->witch;
    }
    public function getInfo(){
        return "{$this->type}" . "{$this->length}" . "{$this->witch}";
    }
}
$objectOne = new Screwdriver ("крестовая отвертка",15,2);
    echo "тип отвертки - " . $objectOne->getType();
    echo "длина отвертки см - " . $objectOne->getLength();
    echo "ширина отвертки см - " . $objectOne->getWitch();