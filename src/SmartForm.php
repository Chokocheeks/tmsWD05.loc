<?php
class SmartForm extends Form
{
    protected $temp=[];

    public function __construct()
    {
        $this->temp = $_REQUEST;
    }
    public function input($name, $type="text", $value=''){
        if(isset($this->temp[$name])){
            $value=$this->temp[$name];
        }
        return parent::input($name, $type, $value);
    }

    public function _toString(){
        return json_encode($this->temp);
    }
}
?>