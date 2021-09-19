<?php 

//initializing
function myFunction($str1,$str2){
    return $str1 . $str2;
};
echo myFunction('georgi ',' angelov');
echo "<br>";

//pass by reference
function myFunc(&$arg){
    $arg +=10;
}
$num=2;
echo $num;
echo "<br>";
myFunc($num);
echo $num ;
echo "<br>";

//number of arguments
function calcSum(){
    $sum=0;
    foreach (func_get_args() as $arg) {
        $sum +=$arg;
    }
    return $sum;;
}
echo calcSum(1,2,3,4,5);
echo "<br>";

//number of arguments 2
function calcSumSecond(...$params){
    $sum=0;
    foreach ($params as $arg) {
        $sum +=$arg;
    }
    return $sum;
}
echo calcSumSecond(1,3,4);
echo "<br>";

//return multiple values
function smallNumbers(){
    return [0,1,2,3];
}
list($a,$b,$c,$d)=smallNumbers();
echo "\$a = $a; \$b = $b; '\$c = $c; \$d = $d'";
echo "<br>";

//Anonymous Functions
$array = array("Team Building, Vitosha", "Nakov",
"studying programming", "SoftUni");

usort($array,function($a,$b){
    return strlen($a) - strlen($b);
});
print_r($array);
echo "<br>";

//Loops and Variable Scope
for ($i=0; $i < 5 ; $i++) { 
    $arr[]=$i ;
}
print_r($arr);
echo "<br>";

//Static Keyword
function callMe(){
    static $count=0;
    $count++;
    echo "callMe() is called $count times \n";
}
callMe();
callMe();
callMe();
callMe();

?>