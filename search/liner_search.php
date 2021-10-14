<?php
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

