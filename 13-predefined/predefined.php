<?php

// Debugger
$name = "javier";
var_dump($name);
echo "<br>";

//Date
echo date("d-m-Y");
echo "<br>";
echo time();
echo "<br>";

//Math
echo "The sqrt of 4 is: ".sqrt(4);
echo "<br>";
echo "Random number between 1 until 10: ".rand(1, 10);
echo "<br>";
echo "The PI number is: ".round(pi(),2);
echo "<br>";
echo "The rounded number of 7.03000 is: ".round(7.03000,2);
echo "<br>";

//General functions
$num = 5;
echo gettype($num);
echo "<br>";
if(is_int($num)){
  echo "Is integer";
}
echo "<br>";

//To know if exists some variable
if(isset($num)){
  echo "The variable exists";
}else{
  echo "The variable don't exists";
}
echo "<br>";
//To clean white spaces in strings
$name = "    Javi  ";
echo trim($name);
echo "<br>";
var_dump($name);
echo "<br>";
//To delete one variable
// $num2 = 20;
// echo $num2;
// $unset($num2);
// echo $num2;
// echo "<br>";
//To know if the variable is empty
$lastname = "";
if(empty($lastname)){
  echo "The variable is empty";
}else{
  echo "The variable isn't empty";
}
echo "<br>";

// To count character on string
$numbers = "12345";
echo "The number of characters is: ".strlen($numbers);
echo "<br>";

//To find the position on the string
echo strpos($numbers, 3);
echo "<br>";

//To replace one word in a phrase
$phrase = "The life is beautiful";
$phrase = str_replace("life", "Motorcycle", $phrase);
echo $phrase;
echo "<br>";

//Uppercase and lowercase
echo strtoupper($phrase);
echo "<br>";
echo strtolower($phrase);
