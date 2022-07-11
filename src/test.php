<?php
include_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<pre>";
    // print_r($_POST);
    echo "</pre>";
    $title = $_POST['title'];
    $content = $_POST['content'];
    $filePath = '';
    if(!empty($_FILES) && isset($_FILES['img'])){
        $filePath = "img/".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], __DIR__."/".$filePath);
    }
    $sql = "INSERT INTO wd05.posts (title, content, img) VALUES ('$title', '$content','$filePath');";
    mysqli_query($connection, $sql);
}
echo "<pre>";
print_r($_FILES);
echo "</pre>";


?>
