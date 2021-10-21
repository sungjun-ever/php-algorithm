<?php
/*
// 오름차순 버블 정렬
class BubbleSort
{
    public array $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function bubbleSort() : array
    {
        $len = count($this->arr);
        for($i=0; $i<$len; $i++){
            for($j=$len-1; $j>$i; $j--){
                if($this->arr[$j-1] > $this->arr[$j]){
                    $temp = $this->arr[$j-1];
                    $this->arr[$j-1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                }
            }
        }
        return $this->arr;
    }
}

$ary = [1, 5, 7, 4, 3, 8, 10];
$a = new BubbleSort($ary);
$r = $a->bubbleSort();
var_dump($r);
*/

/*
//내림차순 버블 정렬
class BubbleSort
{
    public array $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function bubbleSort() : array
    {
        $len = count($this->arr);
        for($i=0; $i<$len; $i++){
            for($j=$len-1; $j>$i; $j--){
                if($this->arr[$j-1] < $this->arr[$j]){
                    $temp = $this->arr[$j-1];
                    $this->arr[$j-1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                }
            }
        }
        return $this->arr;
    }
}

$ary = [1, 5, 7, 4, 3, 8, 10];
$a = new BubbleSort($ary);
$r = $a->bubbleSort();
var_dump($r);
*/

/*
// 정렬이 일어나지 않을 경우 정렬 종료
class BubbleSort
{
    public array $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function bubbleSort() : array
    {
        $len = count($this->arr);
        $totalExchage = 0;
        for($i=0; $i<$len; $i++){
            $exchange = 0;
            for($j=$len-1; $j>$i; $j--){
                if($this->arr[$j-1] < $this->arr[$j]){
                    $temp = $this->arr[$j-1];
                    $this->arr[$j-1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                    $exchange++;
                    $totalExchage++;
                }
            }

            if($exchange == 0){
                break;
            }
        }
        return [$this->arr, $totalExchage];
    }
}

$ary = [1, 2, 3, 4, 5, 8, 10];
$a = new BubbleSort($ary);
$r = $a->bubbleSort();

var_dump($r[0]);
echo '<br>총 교환 횟수: '.$r[1];
*/

// break가 없을 때 교환 수 비교
class BubbleSort
{
    public array $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function bubbleSort() : array
    {
        $len = count($this->arr);
        $totalExchage = 0;
        for($i=0; $i<$len; $i++){
            for($j=$len-1; $j>$i; $j--){
                if($this->arr[$j-1] < $this->arr[$j]){
                    $temp = $this->arr[$j-1];
                    $this->arr[$j-1] = $this->arr[$j];
                    $this->arr[$j] = $temp;
                    $totalExchage++;
                }
            }
        }
        return [$this->arr, $totalExchage];
    }
}

$ary = [1, 2, 3, 4, 5, 8, 10];
$a = new BubbleSort($ary);
$r = $a->bubbleSort();
var_dump($r[0]);
echo '<br>총 교환 횟수: '.$r[1];