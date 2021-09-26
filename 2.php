<?php
//класс ручка механическая
class mechanicalHandle
{
    private $brand;
    private $pastecolor;
    private $pastethickness;
    function __construct($brand,$pastecolor,$pastethickness)
    {
    $this->brand = $brand;
    $this->pastecolor = $pastecolor;
    $this->pastethickness = $pastethickness;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getPastecolor(){
        return $this->pastecolor;
    }
    public function getPastethickness(){
        return $this->pastethickness;
    }
    public function getInfo(){
        return "{$this->brand}" . "{$this->pastecolor}" . "{$this->pastethickness}";
    }
}
$objectOne = new mechanicalHandle ("BRAUBERG","BLACK",0.5);
    echo "Марка - " . $objectOne->getBrand();
    echo "Цвет пасты - " . $objectOne->getPastecolor();
    echo "Толщина пасты в мм - " . $objectOne->getPastethickness();