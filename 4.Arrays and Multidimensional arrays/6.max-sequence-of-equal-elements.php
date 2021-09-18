<?php
 

$array  = ['a','b','b','c'];
$counts = array_count_values($array);
arsort($counts);
print key($counts);

?>