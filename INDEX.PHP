
<?php

// РОЖКОВ АНТОН РП-32  Д/З Индивидуальное задание 2 Индивидуальное задание 2


// 1) МЯСОРУБКА
//создаю класс мясорубка
class MEATGRINDER 
{
    //атрибуты 
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    public $button1 = "кнопка вперед/назад";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключено к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключено к сети";
    }
    //поведение вкл
    public function on($button)
    { 
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включен";
        }
        else 
        {
            echo "не подключено к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
}
// Жизненный цикл
$object = new MEATGRINDER(); 
$object->plug("подключен");
$object->disable("отключен");
$object->on("включен");
$object->off("выключен");
//--------------------------

// 2) НАСТОЛЬНАЯ ЛАМПА
//создаю класс настольная лампа
class TABLELAMP
{
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключено к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключено к сети";
    }
    //поведение вкл
    public function on($button)
    {
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включен";
        }
        else 
        {
            echo "не подключено к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
    //поведение прокрутить вперед
   
    //поведение прокрутить назад
}
// Жизненный цикл
$object = new TABLELAMP(); 
$object->plug("подключен");
$object->disable("отключен");
$object->on("включен");
$object->off("выключен");
//--------------------------

// 3) УТЮГ
//создаю класс утюг
class IRON
{
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключено к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключено к сети";
    }
    //поведение вкл
    public function on($button)
    {
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включен";
        }
        else 
        {
            echo "не подключено к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
}
// Жизненный цикл
$object = new IRON(); 
$object->plug("подключен");
$object->on("включен");
$object->off("выключен");
$object->disable("отключен");
//--------------------------

// 4) ШАРИКОВАЯ РУЧКА
//создаю класс шариковая ручка
class BALLPEN
{
    public $button = "кнопка ВКЛ/ВЫКЛ";
    public $action = "ДЕЙСТВИЕ ПИСАТЬ";
    //поведения
    //поведение вкл
    public function on($button)
    {
        $this->button = true;
        echo "включен";
    }
    //поведение писать
    public function write($action)
    {
        if ($this->button = true)
        {
            $this->action = true;
            echo "пишет";
        }
        else {
            echo "ручка не включена";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
}
    $object = new BALLPEN(); 
    $object->on("включена");
    $object->write("писать");
    $object->off("выключен");
//--------------------------

// 5) КОПИЛКА
//создаю класс копилка
class MONEYBOX
{
    public $volume = "ОБЪЕМ";
    public $action = "ДЕЙСТВИЕ БРОСИТЬ МОНЕТКУ";
    public $action1 = "ДЕЙСТВИЕ РАЗБИТЬ КОПИЛКУ";
    //поведения
    //поведение копилка пустая
    public function empty($volume)
    {
        if ($volume = 0)
        {
        $this->volume = true;
        echo "копилка пустая";
        }
        else 
        {
            echo "копилка полная";
        }
    }
    //поведение копилка полная
    public function complete($volume)
    { 
        if ($volume = 100 )
        {
        $this->volume = false;
        echo "копилка полная";
        }
        else
        {
            echo "копилка пустая";
        }
    }
    //поведение БРОСИТЬ МОНЕТКУ
    public function tossacoin($action)
    { 
        if ($this->volume = true)
        {
            $this->action = true;
            echo "броситьь монету";
        }
        else
        {
            echo "копилка полная";
        }
    }
    //поведение РАЗБИТЬ КОПИЛКУ
    public function breakup($action1)
    { 
        if ($this->volume = false)
        {
            $this->action1 = true;
            echo "копилка разбита";
        }
    }
}
// Жизненный цикл
$object = new MONEYBOX(); 
$object->empty("пустая");
$object->tossacoin("бросить монетку");
$object->complete("полная");
$object->breakup("копилка разбита");
//--------------------------


// 6) ЭЛЕКТРИЧЕСКИЙ ЧАЙНИК
//создаю электрический чайник
class ELECTRICKETTLE
{
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    public $volume = "ОБЪЕМ";
    public $action = "ДЕЙСТВИЕ ЗАЛИТЬ ВОДУ";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключен к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключен к сети";
    }
    //поведение вкл
    public function on($button)
    {
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включен";
        }
        else 
        {
            echo "не подключен к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
    //поведение чайник пустой
    public function empty($volume)
    {
        if ($volume = 0)
        {
        $this->volume = true;
        echo "чайник пустой";
        }
        else 
        {
            echo "чайник полный";
        }
    }
    //поведение чайник полный    
    public function complete($volume)
    { 
        if ($volume = 100 )
        {
        $this->volume = false;
        echo "чайник полный";
        }
        else
        {
            echo "чайник пустой";
        }
    }
    //поведение НАЛИТЬ ВОДЫ
    public function tossacoin($action)
    { 
        if ($this->volume = true)
        {
            $this->action = true;
        }
        else
        {
            echo "чайник полный";
        }
    }
}
// Жизненный цикл
$object = new ELECTRICKETTLE(); 
$object->plug("подключен");
$object->on("включить");
$object->empty("пустой");
$object->tossacoin("залить воду");
$object->complete("полный");
$object->off("выключился");
$object->disable("отключен");
//--------------------------

// 7) КОШЕЛЕК
//создаю кошелек
class PURSE
{
    public $action = "ДЕЙСТВИЕ ОТКРЫТЬ/ЗАКРЫТЬ";
    public $action1 = "ДЕЙСТВИЕ ПОЛОЖИТЬ/ДОСТАТЬ";
    //поведения
    //поведение открыть
    public function open($action)
    {
        $this->action = true;
        echo "открыт";
    }
    //поведение закрыть
    public function cloes($action)
    {
        $this->action = false;
        echo "выключен";
    }
    //поведение положить
    public function put($action1)
    {
        if ($action = true)
        {
        $this->action1 = true;
        echo "положил";
        }
        else 
        {
            echo "кошелек закрыт";
        }
    }
    //поведение достать    
    public function getholdof($action1)
    { 
        if ($action1 = true )
        {
        $this->action1 = false;
        echo "достал";
        }
        else
        {
            echo "кошылек пустой";
        }
    }
}
// Жизненный цикл
$object = new PURSE(); 
$object->open("открытый");
$object->cloes("закрытый");
$object->put("положить");
$object->getholdof("достать");
//--------------------------

// 8) МИКРАВОЛНОВАЯ ПЕЧЬ
//создаю класс микраволновая печь
class MICROWAVE
{
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключено к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключено к сети";
    }
    //поведение вкл
    public function on($button)
    {
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включена";
        }
        else 
        {
            echo "не подключено к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключена";
    }
}
$object = new MICROWAVE(); 
$object->plug("подключен");
$object->on("включен");
$object->off("выключен");
$object->disable("отключен");
//--------------------------

// 9) КЛЕЙ КАРАНДАШ
//создаю класс клей карандаш
class GLUESTICK
{
    public $action = "действие открыть/закрыть";
    public $action1 = "ДЕЙСТВИЕ КЛЕИТЬ";
    //поведения
    //поведение открыть
    public function open($action)
    {
        $this->action = true;
        echo "открыт";
    }
    //поведение клеить
    public function glue($action1)
    {
        if ($this->button = true)
        {
            $this->action1 = true;
            echo "клеит";
        }
        else {
            echo "клей не открыт";
        }
    }
    //поведение закрыть
    public function cloes($action)
    {
        $this->action = false;
        echo "закрыть";
    }
}
    $object = new GLUESTICK(); 
    $object->open("открыт");
    $object->glue("клеит");
    $object->cloes("закрыт");
//--------------------------

// 10) РАДИО
//создаю класс радио
class RADIO
{
    public $powerwire = "провод питания 220вольт";
    public $button = "кнопка ВКЛ/ВЫКЛ";
    public $action = "ДЕЙСТВИЕ ПЕРЕКЛЮЧИТЬ";
    //поведения
    //поведение подключить
    public function plug($powerwire)
    {
        $this->powerwire = true;
        echo "подключено к сети";
    }
    //поведение отключить
    public function disable($powerwire)
    {
        $this->powerwire = false;
        echo "не подключено к сети";
    }
    //поведение вкл
    public function on($button)
    {
        if ($this->powerwire = true)
        {
        $this->button = true;
        echo "включен";
        }
        else 
        {
            echo "не подключено к сети";
        }
    }
    //поведение выкл
    public function off($button)
    {
        $this->button = false;
        echo "выключен";
    }
    //пведение переключить
    public function toswitch($action)
    {
        if ($button = true)
        {
            $this->action = true;
            echo "переключить";
        }
        else
        {
            echo "выключен";
        }
    }
}
    $object = new RADIO(); 
    $object->plug("подключен");
    $object->on("включен");
    $object->toswitch("переключить");
    $object->off("выключен");
    $object->disable("отключен");
?>