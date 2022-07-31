<?php
class Session{
    public function __construct(){
        session_start();
    }
    public function get($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public function set($key, $value){
        $_SESSION[$key] =$value;
    }
    public function is($key){
        return isset($_SESSION[$key]) ? true : false;
    }
    public function delete($key){
        unset($_SESSION[$key]);
    }
    public function __destruct(){
        session_write_close();
    }
}
?>