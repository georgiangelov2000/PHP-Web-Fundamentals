<?php 

class MyClass{
    
    protected $font_size;
    protected $font_color;
    protected $string_value;

    function __construct($font_size, $font_color, $string_value){
        $this->font_size = $font_size;
        $this->font_color = $font_color;
        $this->string_value = $string_value;
        $this->customize_print();
    }

    public function customize_print(){
        echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
    }
}

class MySubClass extends MyClass {
    public function customize_print()
    {
        echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";text-decoration:underline;>".$this->string_value."</p>";
    }
}

// Create objects and passes parameters
$p = new Myclass('20px','red','Object Oriented Programming');
$s = new Mysubclass('15px','green','Object Oriented Programming');