<?php

// Arrays first method
$box = array('Orange', 'apple', 'strawberry');
var_dump($box[0]);

// Array second method
echo "<hr>";
$box2 = ['avocato', 'onion', 'banana'];
var_dump($box2[1]);

// Iterate array with for
echo "<hr>";
echo "<ul>";
for ($i=0; $i < count($box); $i++) { 
    echo "<li>".$box[$i]."</li>";
}
echo "</ul>";

// Iterate array with foreach
echo "<hr>";
echo "<ul>";
foreach ($box2 as $key => $item) {
    echo "<li>".$item."</li>";
}

echo "</ul>";
echo "<hr>";

// array functions
$numbers = array("orange", "turtle", 5, 6, 9, "zaphiro");
var_dump($numbers);
echo "<hr>";

// Add elements

array_push($numbers, 55, 27);
array_pop($numbers);
sort($numbers);
unset($numbers[6]);
var_dump($numbers);
echo "<hr>";

// Random array
$ran = array_rand($numbers);
echo $numbers[$ran];
echo "<hr>";

// ordering on reverse
var_dump(array_reverse($numbers));
echo "<hr>";

// Searching on array
$search = array_search("orange", $numbers);
var_dump($numbers[$search]);
echo "<hr>";

// Counting in an array
$count = count($numbers);
echo $count;
echo "<hr>";
