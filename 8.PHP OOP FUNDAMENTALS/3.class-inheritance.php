<?php

class Person{
    public  $name;
    public  $email;
    function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }
}

class Teacher extends Person {
    function __construct($name,$email,$subject){
        parent::__construct($name,$email);
        $this->subject = $subject;
    }
}

$firstPerson=new Person("Maria","maria@gmail.com");
echo "Person: " . $firstPerson->name . " " . $firstPerson->email ;

echo "<br>";

$firstTeacher= new Teacher("Ivan","ivan@abv.bg","php");
echo "Teacher: " . $firstTeacher->name . " " . $firstTeacher->email . " " . $firstTeacher->subject;

