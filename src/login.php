<?php
session_start();
include_once 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //дописать что-то
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $sql = "SELECT * from users where login = '$login' and password = '$password'";
    $res = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($res);
    if ($user){
        $_SESSION['is_admin'] = 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Log In">
        <input type="password"  name="password" placeholder="password">
        <button type="submit">Log In</button>
    </form>
</body>
</html>