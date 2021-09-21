<?php 

$person=new stdClass();
$person->name="George";
$person->age="21";
$person->weapons=['ak-47','m-16'];
echo json_encode($person);
echo "</br>";
echo "my name is " .$person->name;
?>
































































