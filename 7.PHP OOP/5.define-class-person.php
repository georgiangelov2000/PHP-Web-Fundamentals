<?php

class Person{
    private $name = null;
    private $age = null;

    public function __construct( string $name = null, $age = null){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}

$person=new Person();
echo (count(get_object_vars($person)));

echo"<br>";
$person=new Person("Pesho","20");
echo $person->getName();
echo"<br>";
echo $person->getAge();


?>