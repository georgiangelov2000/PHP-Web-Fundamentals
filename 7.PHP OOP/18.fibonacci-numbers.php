<?php 

class Fibonacci{
    public $list=array();

    function getSequence($n){ 
        $a = 0;
        $b = 1;
        $this->list = [$a,$b];
        for($i=1;$i<$n;$i++)
        {
            $this->list[] = $this->list[$i]+$this->list[$i-1];
        }
        return $this->list;
    }

    public function getNumbersInRange($start,$end){
        $numberInRange = array_slice($this->list,$start,$end - $start);
        return implode(',',$numberInRange);
    }
}

$start=2;
$end=10;

$fibonacci=new Fibonacci();
$fibonacci->getSequence($end);

echo $fibonacci->getNumbersInRange($start,$end);



?>