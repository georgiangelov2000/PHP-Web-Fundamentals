<?php 
$firstArr = ['ivan','petko'];
$secondArr =['dsasda','dsadsa'];
$firstCount = count($firstArr);
$secondCount = count($secondArr);
$longer = max($firstCount, $secondCount);
echo $longer;
echo '<br>';
$shorter = min($firstCount, $secondCount);
echo $shorter;
$left = 0;
$right = 0;

for($i = 0;$i < $shorter; $i++){
    if($firstArr[$i] != $secondArr[$i]){
        break;
    }
    $left++;
    echo $left;
}

$firstReversed = array_reverse($firstArr);
$secondReversed = array_reverse($secondArr);

for($i = 0;$i < $shorter; $i++){
    if($firstReversed[$i] != $secondReversed[$i]){
        break;
    }
    $right++;
    echo $right;
}

echo max($left, $right);

?>
