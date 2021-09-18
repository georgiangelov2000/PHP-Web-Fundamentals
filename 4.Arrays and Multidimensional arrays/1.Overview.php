<?php 

// initializing arrays
$array=['george','peter','ivan'];
$newArray=array(1,2,3);

$newArray=array_fill(0,5,'george');
print_r ( $newArray );
echo '<br>';

//accessing array elements;
$cars=['bmw','audi','mercedes'];
echo $cars[0];
echo '<br>';
echo $cars[1];
echo '<br>';
$cars[2]='george';
echo $cars[2];
echo '<br>';

//iterating throught an array;
$teams=['milan','manutd','barcelona'];
for ($i=0; $i <count($teams) ; $i++) { 
    echo '<br>' .$teams[$i];
}
echo '<br>';

//append to array
$months=array();
array_push($months,'january','february','march','april');
print_r($months);
echo '<br>';

//delete from array
unset($months[2]);
print_r($months);
echo '<br>';

//delete insert in array 
$names=array('ivan','john','dragan','stamat');
array_splice($names,0,1);
print_r($names);

// displaying arrays
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
print_r($names);
echo '<br>';
var_export($names);
echo '<br>';
echo json_encode($names);