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

echo("<hr>");

//  Control structure SWITCH

$day = 1;

switch($day){
   case 1:
      echo("is monday");
      break;
   case 2:
      echo("is tuesday");
      break;
   default:
      echo("find de semana");
}

echo("<hr>");

// Operador goto

goto paso_5;

echo("paso 1");
echo("paso 2");
echo("paso 3");
echo("paso 4");

paso_5:
   echo("I have join to five step");