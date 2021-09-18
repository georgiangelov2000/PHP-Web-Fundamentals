<?php

$input = array(1,2,2,2,8,9);

$output = array();
$maxElement = 0;

for($i=0;$i<count($input);$i++) {
    $count = 0;
    for ($j = 0; $j < count($input); $j++) {
        if ($input[$i] == $input[$j]) {
            $count++;
        }
    }
    echo $count;
    echo '<br/>';

    if($count>$maxElement){
        $maxElement = $count;
        $a = $input[$i];
    }
}

echo 'most frequent element is  '. $a.' -> '.$maxElement;

?>