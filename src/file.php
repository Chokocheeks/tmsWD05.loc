<?php
$fp = fopen(__DIR__.'/1.txt', 'r');
fwrite($fp, '1');
$content = fread($fp, 10000);
print_r($content);
fclose($fp);
?>