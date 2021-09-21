<?php 

//Defining constructor
class Rock{
    public $height=12;
    function fall(){
        $this->height--;
    }
}

$myRock=new Rock();
$myRock->fall();
echo $myRock->height;

echo"<br/>";

//Defining constructor 2
class Person{
    public $firstname;
    public $lastname;

    function __construct(string $firstname,$lastname){
        $this->firstname =$firstname;
        $this->lastname =$lastname;
    }
}

//Defining methods
class Car{
    public $type;
    public $year;

    function printNames(): void {
        echo $this->type . $this->year;
    }
}

//Defining methods 2
class Car2{
    public $mark;
    public $age;

    function printNames(string $mark): string {
        $this->mark = $mark;
        return $this->mark;
    }
}