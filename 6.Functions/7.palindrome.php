<?php 

function checkPalindrome($string){
    $string = strtolower($string);
    $reverse = strrev($string);
        if($string == $reverse){
           return "true";
        } else {
           return "false";
        }
 }

 echo checkPalindrome('georgi');

?>