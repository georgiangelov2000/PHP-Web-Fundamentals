<?php 
//initializing associative array
$people=['John'=>'0896831628', 'George'=>'0896831626'];
echo $people['John'];
echo "<br>";
print_r($people);

echo "<br>";
//inserting deleting
$people['Ivan']='0896831623';
print_r($people);

echo "<br>";
unset($people['Ivan']);
print_r($people);

// iterating
echo "<br>";
$greetings=['Bulgaria'=>'ko staa','france'=>'bonjour','uk'=>'good morning'];
foreach ($greetings as $key => $value) {
    echo "In $key people say $value";
    echo "<br>";
}

//Accessing characters and substrings
$someString="lorem ipsum dolor";
echo strpos($someString,"dolor");
echo "<br>";
var_dump($someString,"dyrabyra");
echo "<br>";
echo strstr("This is madness!\n", "is ") ; // is madness!

//Accessing Characters and Substrings (2)
echo "<br>";
$str='george';
echo substr($str,1);
echo "<br>";
echo substr($str,3,2);
echo "<br>";
echo $str[1];
echo "<br>";

//Counting Strings
echo strlen($str);
$countries = "Bulgaria, Brazil, Italy, USA, Germany";
echo "<br>";
echo str_word_count($countries);

//String replacing
echo "<br>";
$name="georginikolovangelov";
$newName=str_replace("georginikolov","ivannikolov",$name);
echo $newName;
echo "<br>";

//Splitting Strings                
$splitString="Hello how are you ?";
$arrSplit=str_split($splitString,5);
var_export($arrSplit);
echo "<br>";

//case changing
$stringLower="Javascript";
echo strtolower($stringLower);
echo "<br>";
echo strtoupper($stringLower);
echo "<br>";
$str="Hello";
$str[1]='a';
echo $str;
?>