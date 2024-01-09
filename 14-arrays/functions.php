<?php

$numbers = array(1, 5, 3, 4, 2);

foreach ($numbers as $value) {
  echo $value."<br>";
}

arsort($numbers);

echo "<br>";

foreach ($numbers as $value) {
  echo $value."<br>";
}
echo "<hr>";
//To add value on array
$movies = array("Spider Man", "Food", "Batman", "Dead Running");
$movies[] = "Naruto";
array_push($movies, "Dragon Ball");
foreach ($movies as $value) {
  echo $value."<br>";
}
echo "<hr>";
$index = array_rand($movies);
echo "<br>";
echo "<h1>Random movies</h1>";
echo $movies[$index];
echo "<hr>";

//Array search
$item = array_search("Food", $movies);
echo $item;