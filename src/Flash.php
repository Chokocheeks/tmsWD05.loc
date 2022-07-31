<?php
class Flash{
    private $session;
    public function __construct(){
        $this->session = new Session;
    }

    public function setMessage($key, $value){
        $this->session->set($key, $value);
    }

    public function getMessage($key){
        return $this->session->get($key);
    }

}
?>