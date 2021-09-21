<?php 

class ArraySort{
    public $sort;

    public function __construct(array $sort){
        $this->sort = $sort;
    }

    public function sorted(){
        $sorted=$this->sort;
        sort($sorted);
        return $sorted;
    }
}

$NewSortArray=new ArraySort(array(1,2,3,4,55,6,7,8,9));
print_r($NewSortArray->sorted())."\n";

?>