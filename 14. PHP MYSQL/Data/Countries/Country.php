<?php 

namespace Data\Countries;

class Country {
    private $id;
    private $name;

    public function getId(){
        return $this->id;
    }

    public function setName(){
        return $this->name;
    }

}