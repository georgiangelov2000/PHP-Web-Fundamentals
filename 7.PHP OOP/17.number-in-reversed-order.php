<?php 

class DecimalNumber{
    public $number;

    public function __construct(string $number){
        $this->number = $number;
    }

    public function printReversed(){
        echo strrev($this->number);
    }
}

$number=new DecimalNumber("ten");
$number->printReversed();

?>