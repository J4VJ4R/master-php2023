<?php

$numbers = [1, 2, 3, 7, 10, 4];


//sort
sort($numbers);
foreach($numbers as $number){
    echo("<h3>".$number."</h3>");
}
echo "<hr/>";
//asort
asort($numbers);

foreach($numbers as $number){
    echo("<h3>".$number."</h3>");
}

//add items with normal form 
echo "<hr/>";
$numbers[] = 11;
foreach($numbers as $number){
    echo("<h3>".$number."</h3>");
}
//add items with push form 
echo "<hr/>";
array_push($numbers, 110);
foreach($numbers as $number){
    echo("<h3>".$number."</h3>");
}

//search
echo "<hr/>";
var_dump(array_search(110, $numbers));
//count
echo "<hr/>";
echo count($numbers);