<?php
/*스택과 같이 데이터를 임시 저장하는 자료구조, 선입선출 구조*/

class Queue
{
    public array $queue = [];
    public int $leftPtr = 0;
    public int $rightPtr = 0;

    public function push($value)
    {
        array_push($this->queue, $value);
        $this->rightPtr += 1;
    }

    public function pop()
    {
        $ptr = $this->leftPtr;
        $this->leftPtr += 1;
        return $this->queue[$ptr];
    }

    public function top()
    {
        return $this->queue[$this->rightPtr-1];
    }

}

$a = new Queue();
for($i=5; $i>0; $i--){
    $a->push($i);
}
var_dump($a->queue);
echo '<br>POP: '.$a->pop();
echo '<br>왼쪽 포인터는 '.$a->leftPtr;
echo '<br>오른쪽 포인터는 '.$a->rightPtr;
echo '<br>TOP: '.$a->top();