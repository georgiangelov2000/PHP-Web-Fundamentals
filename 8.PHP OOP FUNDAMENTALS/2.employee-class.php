<?php

class Employee{
    public $fname;
    public $lname;
    protected $salary;
    private $age;

    public function __construct($fname, $lname, $salary,$age){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->setSalary($salary);
        $this->setAge($age);
    }

    public function increaseSalary($increase){
        if($increase<10){
            throw new Exception('Invalid increase');
        }
        $this->salary *=(1 + $increase/100);
    }

    public function setSalary($salary){
        if($salary<1){
            throw new Exception('Invalid salary');
        }
       return $this->salary = $salary;
    }

    public function setAge($age){
        if($age<16){
            throw new Exception('Invalid age');
        }
       return $this->age = $age;
    }
}

$employee= new Employee("georgi","angelov","21","222");
$employee->increaseSalary(15);

echo $employee->setSalary("500 ");
echo $employee->setAge("21");