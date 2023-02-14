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

