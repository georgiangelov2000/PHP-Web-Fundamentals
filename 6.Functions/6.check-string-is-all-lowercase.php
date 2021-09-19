<?php 
    function isAllLowercase($string){
        if($string == strtolower($string)){
            echo "True";
        }else{
            echo "False";
        }
    }
    return isAllLowercase("dsadsa");
    return isAllLowercase("SADS");
?>