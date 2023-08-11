<?php


/**
 * 
 * TYPE OF DATA
 * 
 * Int = 99
 * Float / double = 3.45
 * Strings = "hello"
 * Bool = true or false 
 * null
 * Array data colection
 * Objects
*/

$number = 5;
$float = 2.4;
$string = 'string';
$bool = true;
$null = null;
$array = array('apple', 'orange');
$obj = (object) array('name' => 'Juan');

echo gettype($number);
echo '<br>';
echo gettype($float);
echo '<br>';
echo gettype($string);
echo '<br>';
echo gettype($bool);
echo '<br>';
echo gettype($null);
echo '<br>';
echo gettype($array);
echo '<br>';
echo gettype($obj);

echo '<hr>';

var_dump($obj);

echo '<hr>';

print_r($obj);