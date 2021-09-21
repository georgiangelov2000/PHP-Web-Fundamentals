<?php 

class Factorial{
    public $n;
    public function __construct($n){
        if(!is_int($n)){
            throw new InvalidArgumentException('Not a number or missing argument');
        }
        $this->n=$n;
    }
    public function result(){
       $factorial=1;
       for ($i=1; $i <= $this->n; $i++) { 
           $factorial*=$i;
       } 
       return $factorial;
    }

}

$newFactorial=new Factorial(21);
echo $newFactorial->result();

?>