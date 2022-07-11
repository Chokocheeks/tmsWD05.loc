<?php
include_once 'db.php';
echo "<pre>";
print_r($_FILES);
echo "</pre>";
echo "<br>"; 
echo "<br>"; 


$path = __DIR__.'/uploads/';

$files = [];
if (isset($_FILES['file'])) { //null или нет
    foreach($_FILES['file'] as $key => $value) { // [file] => [name]
        foreach($value as $k => $v) {        // [0] => header-1.png
            $files[$k][$key] = $v;  //[file][0]header-1.png
        }
    }
    echo "<pre>";
    print_r($files);
    echo "<pre>";

    foreach($files as $file){
        if(file_exists($path.$file['name'])){ //Проверяет существование указанного файла
            $file['name'] = uniqid("1").$file['name']; //уникальный идентификатор с префиксом, основанный на текущем времени в микросекундах.
            echo $file['name'];
        }
        if(move_uploaded_file($file['tmp_name'], $path.$file['name'])){
            echo 'FILE size - '.round(($file['size'] / 1000000), 3).' MB';
            echo "<br>"; 
            echo 'FILE name - '.$file['name'];
            echo "<br>"; 
            echo 'FILE path - '.$path;
            echo "<br>";
            echo "<br>";
        }else{
            echo 'NOT download';
        } 
    }     
}else{
    echo 'NULL FILE';
}
?>