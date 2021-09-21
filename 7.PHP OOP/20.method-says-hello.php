<?php 

class Person{
    public $name;

    function __construct($name){
        $this->name = $name;
        echo $name . 'says hello';
    }
}

$person=new Person("George");
echo '<br>';
$fields=count(get_object_vars($person));
echo $fields;
echo '<br>';
$methods=count(get_class_methods($person));
echo $methods;

if ($fields != 1 || $methods != 1) {
    throw new Exception("Too many fields or methods");
}

?>