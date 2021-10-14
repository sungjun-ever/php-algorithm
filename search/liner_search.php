<?php
/*
function liner_search(array $a, $key)
{
    for($i=0; $i<count($a); $i++){
        if($a[$i] == $key){
            return $i;
        }
    }
    return false;
}

$arr = array(1, 2, 3, 4, 5);
$r = liner_search($arr, 4);
var_dump($r);
*/

/*
function liner_search(array $a, $key)
{
    $i = 0;
    while(true){
        if($i == count($a)){
            return false;
        }
        if($a[$i] == $key){
            return $i;
        }
        $i++;
    }
}

$arr = [1, 2 ,3 ,4 ,5];
$r = liner_search($arr, 6);
var_dump($r);
*/


function liner_search(array $a, int $key)
{
    $i = 0;
    array_push($a, $key);
    while(true){
        if($i == count($a)-1){
            return false;
        }

        if($a[$i] == $key){
            return $i;
        }
        $i++;
    }
}
$arr = [1, 2, 3, 4, 5];
$r = liner_search($arr, 2);
if($r == false){
    echo '원소가 없습니다.';
} else {
    echo '원소는 '.$r.'에 있습니다.';
}

