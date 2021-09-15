<?php 

function updateCounter(){
    global $counter;
    $counter++;
}

$counter=10;
updateCounter();
echo $counter;

echo "<br>";

function updateCounterSecondFunction(){
    $counter=10;
    $counter++;
}

$counter=10;
updateCounterSecondFunction();
echo $counter;


?>