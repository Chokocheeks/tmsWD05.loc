<?php
class Form{
    public function open($action='', $method='get'){
        return '<form method="'.$method.'" action="'.$action.'">';
    }
    public function input($name, $type="text", $value=''){
        return '<input name="'.$name.'" type="'.$type.'" value="'.$value.'">';
    }
    public function textarea($name, $id, $cols, $rows){
        return '<textarea name="'.$name.'" id="'.$id.'" cols="'.$cols.'" rows="'.$rows.'"></textarea>';
    }
    public function password($name){
        return $this->input($name, $type='password', $value=null);
    }
    public function submit($value){
        return '<input type="submit" value="'.$value.'"">';
    }
    public function close(){
        return '</form>';
    }

}
?>
