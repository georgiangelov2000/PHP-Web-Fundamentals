<?php 

function factorial ($n,$f){
    for ($x=$n; $x>=1; $x--)   
    {  
      $f = $f * $x;  
    }
    return "Factorial $n is $f";  
}

echo factorial(4,1);

?>