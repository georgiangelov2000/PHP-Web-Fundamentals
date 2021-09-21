<?php 

class myClass{
    public $text;

    // Methods
  function set_name($text) {
    $this->text = $text;
  }
  function get_name() {
    return $this->text;
  }
}

$newClass= new myClass();
$newClass->set_name("Hello");
echo $newClass->get_name();

?>