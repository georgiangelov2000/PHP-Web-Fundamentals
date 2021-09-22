<?php

class Person
{
    private $name;
    private $age;
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    //setters
    protected function setName($name)
    {
        if (strlen($name) < 3) {
            throw new Exception("Name's length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }

    protected function setAge($age)
    {
        if ($age < 1) {
            throw new Exception("Age must be positive!");
        }
        $this->age = $age;
    }
}

class Child extends Person{
    public function __construct(string $name, int $age){
        parent::__construct($name, $age);
    }

    protected function setAge($age){
        if($age > 15){
            throw new Exception("Child's age must be less than 16!");
        }
        parent::setAge($age);
    }
}

try{
    $person = new Person("John", 13);
    $child = new Child("Joey",13);
} catch (Exception $e){
    echo $e->getMessage();
}
var_dump($person);
var_dump($child);