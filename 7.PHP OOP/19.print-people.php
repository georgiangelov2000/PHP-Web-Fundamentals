<?php 

class Person{
   public $name;
   public $age;
   public $occupation; 

   function __construct($name,$age,$occupation){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
   }

   public function toString(){
    return $this->name . ' - ' . 'age: ' . $this->age . ', occupation: ' . $this->occupation . PHP_EOL;
   }

   public function getName(){
       return $this->name;
   }

   public function getAge(){
       return $this->age;
   }

   public function getOccupation(){
       return $this->occupation;
   }

}

$people=[];

while (true) {
    $input="END";
    if($input=="END"){
        break;
    }
    $personInfo=explode(",",$input);
    list($name, $age, $occupation) = [$personInfo[0], intval($personInfo[1]), $personInfo[2]];
    $person=new Person("georgi",21,"dsadsa");
    $person=[];

    function sortByAge($p1,$p2){
        return $p1->getAge() > $p2->getAge();
    }

    usort($person,'sortByAge');

    foreach($people as $person){
        echo $person;
    }

}