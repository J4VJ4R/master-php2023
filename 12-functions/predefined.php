<?php
//predefinidas

echo "Random number between 10 and 20: ".rand(10, 20);

//date
echo "<hr>";
echo "The day is: ".date("D-M-y");

//round number
echo "<hr>";
echo "The round number of 4.789 is: ".round(4.789);

// sqrt
echo "<hr>";
echo "The sqrt of 5 is: ".sqrt(5);

// Check data type
$n1 = "test";
echo "<hr>";
echo "Data type of 5 is: ".gettype($n1);

// Check is o not is anything
echo "<hr>";
if(is_int($n1)){
    echo "This variable is a integer ";
}else{
    echo "This variable not is an integer";
}

// Check if exists
echo "<hr>";
if(isset($n1s)){
    echo "The variable exists";
}else{
    echo "The variable don't exists";
}

// Remove spaces
echo "<hr>";
$name = " Sara    ";
var_dump($name);
echo "<hr>";

$name = " Sara    ";
$name = trim($name);
var_dump($name);
echo "<hr>";

// Check if a variable is empty
$house = "Nevera, this is an important element";
if(empty($house)){
    echo "The house is empty";
}else{
    echo "The house isn't empty";
    
}
echo "<hr>";

// To Count Characters
echo strlen($house);
echo "<hr>";

// To find words in a string
$subString = "Nevera";
$position = strpos($house, $subString);
echo $position;
echo "<hr>";

// Replace word in the string
$old_element = "Nevera";
$new_element = "Sofa";
$new_house = str_replace($old_element, $new_element, $house);
echo $new_house;
echo "<hr>";

// To change a uppercase
echo strtoupper($new_house);
echo "<hr>";

// To change a lowercase
echo strtolower($new_house);
echo "<hr>";

