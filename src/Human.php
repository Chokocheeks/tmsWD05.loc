<?php
class Human {
    private $age;
    protected $name;
    public $sex;

    public static $pensionAge = 60;

    public static function getPensionAge(){
        return self::$pensionAge;
    }

    const TOOTH = 32;

    public function __construct($name, $age, $sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function sayHello()
    {
        return $this->name." ".$this->age." ".self::TOOTH;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if(mb_strlen($name) < 3){
            return false;
        }
        $this->name = ucfirst($name);
        return true;
    }
}
?>