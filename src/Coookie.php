<?php
class Cookie{
    public function setCookie($name, $value){
        setcookie($name, $value);
    }
    public function getCookie($name){
        return isset($_COOKIE["$name"]) ? $_COOKIE["$name"] : null;
    }
    public function deleteCookie($name){
        setcookie($name, "");
    }
}
?>