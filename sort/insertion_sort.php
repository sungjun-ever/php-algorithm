<?php
class InsertionSort
{
    public array $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function insertionSort() : array
    {
        $a = $this->arr;
        $len = count($a);
        $totalChange = 0;
        for($i=1; $i<$len; $i++){
            $j = $i;
            $temp = $a[$i];
            echo '------------------<br>';
            $this->printArr($a);
            echo 'outside: '.$a[$j-1].', '.$temp.'<br>';
            while($j>0 and $a[$j-1]>$temp){
                echo 'inside: '.$a[$j-1].', '.$temp.'<br>';
                $a[$j] = $a[$j-1];
                echo 'exchange: '.$a[$j-1].'=>'.$temp.'<br>';
                $j--;
                $totalChange++;
            }
            $a[$j] = $temp;
            $this->printArr($a);
        }
        return [$a, $totalChange];
    }

    public function printArr($arr){
        $len = count($arr);
        for($i=0; $i<$len; $i++){
            echo $arr[$i].' ';
        }
        echo '<br>';
    }
}

$ary = [6, 4, 1, 7, 3, 9];
$aa = new InsertionSort($ary);
$r = $aa->insertionSort();
echo 'result------------------<br>';
var_dump($r[0]);
echo '<br>'.$r[1];