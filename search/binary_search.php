<?php
function binary_search(array $a, int $key)
{
    $left = 0;
    $right = count($a) - 1;

    while (true){
        $center = intval(($left + $right) / 2);
        if ($a[$center] == $key){
            return $center;
        } elseif ($a[$center] < $key){
            $left = $center + 1;
        } else {
            $right = $center - 1;
        }

        if ($left > $right){
            return false;
        }
    }
}

$arr = [1, 2, 5, 7, 9, 15, 24, 53, 78];
$r = binary_search($arr, 3);
var_dump($r);