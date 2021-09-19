<?php 
function primeCheck($primeN){
    if($primeN==1)
    return 0;

    for ($i = 2; $i <= $primeN/2; $i++){
        if ($primeN % $i == 0)
            return 0;
    }
    return 1;
}

$exampleNumber=12;
$flag=primeCheck($exampleNumber);
if ($flag == 1)
    echo "$exampleNumber is Prime";
else
    echo " $exampleNumber is Not Prime"

?>