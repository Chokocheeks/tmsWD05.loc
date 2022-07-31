<?php
class Student extends Human{
    public function sayAnswer()
    {
        return "I don't know";
    }

    public function sayHello()
    {
        return $this->name." ".$this->sex."lllllll";
    }
}
?>