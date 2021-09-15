<?php 

function updateCounter(){
    static $counter=0;
    $counter++;
    echo 'Static counter :  ${counter} \n';
}
$counter=10;
updateCounter();
updateCounter();
echo"Global Counter  ${counter} \n ";
?>