<?php

class Bird
{
    private $age;
    private $weight;
    private $flyingSpeed;

    public function __construct($age, $weight, $flyingSpeed)
    {
        $this->age = $age;
        $this->weight = $weight;
        $this->flyingSpeed = $flyingSpeed;
    }
    
    public function walk()
    {
        echo "Walking" . "\n";
    }

    public function breath()
    {
        echo "Breathing" . "\n";
    }

    public function fly()
    {
        echo "Flying" . "\n";
    }
}
