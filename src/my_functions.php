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
//debug(arrX($arrTest, 5));

function exponentiation($a, $ex){
    $res = $a;
    while($ex > 1){
        $res *= $a;
        $ex--;
    }
    return $res;
}

//debug(exponentiation(15, 2));

function lowerCase($str){
	if(ctype_lower($str)){
		echo "Все символы в строке $str в нижнем регистре \n";
	}else{
		echo "В строке $str присутствуют символы в верхнем регистре \n";
	}	
}
//print_r(lowerCase('hwwAAAAjhR'));

function lowerCaseTwo($str){
	if($str === mb_strtolower($str)){
		echo "Все символы в строке $str в нижнем регистре \n";
	}else{
		echo "В строке $str присутствуют символы в верхнем регистре \n";
	}	
}
//print_r(lowerCaseTwo('hww'));

function randArray($size){
	for($i = 0; $i < $size; $i++){
		$arr[] = random_int(-99999999, 99999999);
	}
	return $arr;
}
//var_dump(randArray(20));

function dayOfWeek($a){
	switch($a){
		case 1:
			echo 'that Monday';
			break;
		case 2:
			echo 'that Tuesday';
			break;
		case 3:
			echo 'that Wednesday';
			break;
		case 4:
			echo 'that Thursday';
			break;
		case 5:
			echo 'that Friday';
			break;
		case 6:
			echo 'that Saturday';
			break;
		case 7:
			echo 'that Sunday';
			break;
		default:
			echo "that not Day of the Week";
			
	}
}
//var_dump(dayOfWeek(1));

function fibo($num) { 
    if ($num < 1){
       return "Число не является элементом рада Фибоначчи";
   }elseif($num <= 2){
       return ($num - 1);
   }else{
       $beforePre = 0;
       $next = 1;
       for($i = 3; $i <= $num; $i++){
           $pre = $next;
           $next = $pre + $beforePre;
           $beforePre = $pre;
       }
       return $next;
   }
}

?>