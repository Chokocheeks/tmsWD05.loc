<?php
class Animal{
    public $name;
    public $legs;
    public function __construct($name, $legs)
    {
        $this->name = $name;
        $this->legs = $legs;
    }
    public function __destruct()
    {
        echo "404";
    }
    public function sayHello(){
        if($this->legs == 0){
            return "buhl";
        }else{
            return "woof";
        }
    }
}
?>