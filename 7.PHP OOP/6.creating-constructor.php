<?php 

class Person{
    public $name;
    public $lastname;

    public function __construct(string $name ,int $lastname){
        $this->name = $name;
        $this->lastname = $lastname;
    }    
}
$name=trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
$person= new Person($name,$age);
