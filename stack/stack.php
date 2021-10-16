<?php
/*스택이란 데이터를 임시 저장할 때 사용하는 자료구조로, 후입선출의 구조*/

class Stack
{
    public array $stack = [];
    public int $ptr = 0;

    public function push($value)
    {
        array_push($this->stack, $value);
        $this->ptr += 1;
    }

    public function pop()
    {
        $this->ptr -= 1;
        echo '<br>'.$this->stack[$this->ptr].' pop, 포인터는'.$this->ptr;
        return array_pop($this->stack);
    }

    public function printPtr()
    {
        return $this->ptr;
    }

    public function top()
    {
        return $this->stack[$this->ptr-1];
    }

    public function clear()
    {
        $this->stack = [];
    }
}

$a = new Stack();
for($i=0; $i<5; $i++){
    $a->push($i);
}

var_dump($a->stack);
$a->pop();
$a->pop();
echo '<br>현재 포인터는 '.$a->printPtr();
echo '<br>현재 탑은 '.$a->top().'<br>';
var_dump($a->stack);
$a->clear();
var_dump($a->stack);
