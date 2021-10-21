<?php
class SelectionSort
{
    public array $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function selectionSort()
    {
        $len = count($this->arr);
        for($i=0; $i<$len; $i++){
            $min = $i;
            for($j=$i+1; $j<$len; $j++){
                if($this->arr[$j] < $this->arr[$min]){
                    $min = $j;
                }
            }
            $temp = $this->arr[$i];
            $this->arr[$i] = $this->arr[$min];
            $this->arr[$min] = $temp;
            var_dump($this->arr);
            echo '<br>';
        }
        return $this->arr;
    }
}

$ary = [6, 4, 8, 3, 1, 9, 7];
$a = new SelectionSort($ary);
$r = $a->selectionSort();
var_dump($r);