<?php 

class Person{
    protected $age;
    private $gender;

    public function __construct( $age, $gender ){
        $this->setAge( $age );
        $this->setGender( $gender );
    }

    public function setAge( $age ){
        $this->age = $age;
    }

    public function setGender( $gender ){
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }
    public function getAge(  ){
        return $this->age ;
    }
}

$newPerson = new Person("12 ","male ");
echo $newPerson->getGender();
echo $newPerson->getAge();


?>