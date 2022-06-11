<?php

echo "<h1>BUCLE WHILE</h1>";
echo "<h1>EXAMPLE 1</h1>";

// Execute the code many times as required

$ship1 = 0;

while($ship1 <= 10){
    echo "The ship is fly in the universe a $ship1 kms/s <br>";
    $ship1++;
}
echo "<hr>";
echo "<h1>EXAMPLE 2</h1>";

if(isset($_GET['number'])){
    $number = (int)$_GET['number'];
}else{
    $number = 1;
}

echo "<h2>Multiplication table of Number $number <br>";

$counter = 0;

while($counter <= 10){
    echo "$number  x $counter  = ". $number * $counter . "<br>";
    $counter++;
}

echo "<hr/>";

echo "<h1>BUCLE DO WHILE</h1>";
echo "<h1>EXAMPLE 1</h1>";

$hour = 0;
do{
    echo "You is working <br>";
    $hour++;
}while($hour < 12);

