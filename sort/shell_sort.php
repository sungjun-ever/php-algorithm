<?php
class ShellSort
{
    public array $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function shellSort()
    {
        $a = $this->arr;
        $len = count($a);
        $m = intval($len / 2);
        var_dump($a);
        echo '<br>';
        while ($m > 0){
            for ($i=$m; $i<$len; $i++){
                $j = $i - $m;
                $min = $a[$i];
                while ($j >= 0 and $a[$j] > $min){
                    $a[$j+$m] = $a[$j];
                    $j -= $m;
                }
                $a[$j+$m] = $min;
            }
            $m = intval($m/2);
            var_dump($a);
            echo '<br>';
        }

        return $a;
    }
}

$ary = [5, 2, 4, 0, 1, 3];
$aa = new ShellSort($ary);
$r = $aa->shellSort();
var_dump($r);
