<?php 

class MyCalculator{
public $firstNumber;
public $secondNumber;

public function __construct($firstNumber,$secondNumber){
    
    if(!is_int($firstNumber) || !is_int($secondNumber)){
        throw new InvalidArgumentException('The sum must be an integer');
    }else{
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }
}

    public function add(){
        return $this->firstNumber + $this->secondNumber;
    }


    public function subtract(){
        return $this->firstNumber - $this->secondNumber;
    }

    public function multiply(){
        return $this->firstNumber * $this->secondNumber;
    }

    public function divide(){
        return $this->firstNumber / $this->secondNumber;
    }

}

$firstSum=new MyCalculator(5,4);
echo $firstSum->add()."\n";
echo $firstSum->subtract()."\n";
echo $firstSum->multiply()."\n";
echo $firstSum->divide()."\n";


?>