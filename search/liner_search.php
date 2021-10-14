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

