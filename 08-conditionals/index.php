<?php

//condicional if

$year = 2025;

if($year == 2022){
   echo "<h3>we are on 2022</h3>";
}else{
   echo "we aren't on 2022";
}

// conditional elseif

//Day of the week

echo("<hr>");

$day = 1;

if($day == 1){
   echo("is Monday");
}elseif($day == 2){
   echo("is Tuesday");
}elseif($day == 3){
   echo("is wednesday");
}else{
   echo("error");
}

//Logic operator AND

echo("<hr>");

//age for work
$min = 18;
$max = 60;
$oficial_age = 20;

if($oficial_age >= $min && $oficial_age <= $max){
   echo("You can work");
}else{
   echo("you can't work");
}

// Logical operator || or

echo("<hr>");


// here speak spanish

$city = "Estados Unidos";

if($city == "Colombia" || $city == "España" || $city == "Argentina"){
   echo("Here speak spanish");
}else{
   echo("Here don't speak spanish");
}