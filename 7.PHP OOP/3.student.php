<?php

class Student{
    public $name;
    public $age;

    public function __construct($name=null,$age=null){
        $this->name = $name;
        $this->age = $age;
    }
};

$peter=new Student("Peter ",21);
echo $peter->name;
echo $peter->age;

echo"<br/>";
print_r($peter);

?>