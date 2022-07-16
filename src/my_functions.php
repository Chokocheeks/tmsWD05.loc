<?php

function debug($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function sum(int $a, int $b){
    $sum = $a + $b;
    return $sum;
}

function sumArr(...$args){
    return array_sum($args);
}

function sortText($content){
        $shortText = strip_tags($content);
        $shortText = mb_substr($shortText, 0, 150);
        $pos = mb_strrpos($shortText, ' ');
        if($pos !== false){
            $shortText = mb_substr($shortText, 0, $pos);
        }
        $shortText .= " ...";
    return $shortText;
}

function arrX(array $arr, int $int){
    foreach($arr as $key => $el){
        $arr[$key] = $el * $int;
    }
    return $arr;
}

$arrTest =[55, 78, 15, 6, 58];
debug(arrX($arrTest, 5));