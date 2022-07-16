<?php
include 'my_functions.php';
setcookie('my_cookie', 'lola', time()+60*60*24*30);
debug($_COOKIE);
debug(sum(555,66));
?>