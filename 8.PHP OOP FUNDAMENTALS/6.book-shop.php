<?php

class Book
{
    private $authorFirstName;
    private $authorSecondName;
    private $title;
    private $price;

    function __construct(string $authorFirstName, string $authorSecondName, string $title, float $price)
    {
        $this->setAuthor($authorFirstName, $authorSecondName);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    //getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->authorFirstName . ' ' . $this->authorSecondName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    //setters
    protected function setTitle($title)
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid');
        }
        $this->title = $title;
    }

    protected function setAuthor(string $firstName, string $secondName)
    {
        if (is_numeric($secondName[0])) {
            throw new Exception("Author not valid!");
        }
        $this->authorFirstName = $firstName;
        $this->authorSecondName = $secondName;
    }

    protected function setPrice($price)
    {
        if ($price <= 0) {
            throw new Exception("Price not valid!");
        }
        $this->price = $price;
    }

    public function __toString()
    {
        return 'OK' . PHP_EOL . $this->getPrice();
    }
}

class GoldenEditionBook extends Book
{
    function __construct(
        string $authorFirstName,
        string $authorSecondName,
        string $title,
        float $price
    ) {
        parent::__construct($authorFirstName, $authorSecondName, $title, $price);
    }

    public function getPrice()
    {
        return parent::getPrice() * 1.3;
    }
}

$names=explode('',trim(fgets(STDIN)));
list($firstName,$secondName)=[$names[0],$names[1]];
$title="standart";
$price="211";
$type="type1";

try {
    if($type==="standart"){
        $book= new Book($firstName,$secondName,$title,$price);
    }else if($type="gold"){
        $book= new GoldenEditionBook($firstName,$secondName,$title,$price);
    }else{
        throw new Exception("Type is not valid");
    }
    echo $book;
} catch (Exception $e) {
    echo $e->getMessage();
}