<?php
class NumbersSquared implements Iterator{
    private $start, $end, $current;
    function __construct($start, $end){
        $this->start = $start;
        $this->end = $end;
    }
    function rewind(){
        $this->current = $this->start;
    }
    function valid(){
        if($this->current > $this->end)
            return false;
        else
            return true;
    }
    function next(){
        $this->current++;
    }
    function key(){
        return $this->current;
    }
    function current(){
        return pow($this->current, 2);
    }
}
$obj = new NumbersSquared(2, 10);
foreach($obj as $num => $square){
    echo "Квадрат числа $num = $square<br/>";
}