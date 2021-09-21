<?php 

class Number{
    public $number;

    public function __construct(string $number){
        $this->number = $number;
    }

    public function getLastDigitName(){
        $digitCount = strlen($this->number);
        $lastDigit = $this->number[$digitCount - 1];
        $lastDigitName = '';

        switch ($lastDigit) {
           case "0" : $lastDigitName="zero";break;
           case "1" : $lastDigitName="one";break;
           case "2" : $lastDigitName="two";break;
           case "3" : $lastDigitName="three";break;
           case "4" : $lastDigitName="four";break;
           case "5" : $lastDigitName="five";break;
        }
        return $lastDigitName . " " .$lastDigit;
    }
}

$number=new Number("3");
echo $number->getLastDigitName();

?>