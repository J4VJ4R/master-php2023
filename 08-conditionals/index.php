 <?php

// EXAMPLE 1 - NUMBER BIGGER

 $num1 = 24;
 $num2 = 4;

 if($num1 > $num2){
    echo "el número $num1 is bigger than $num2 ";
 }elseif($num1 < $num2){
    echo "the number $num1 is smaller than number $num2";
 }else{
    echo "The numbers $num1 and $num2 are equals";
 }

echo "<hr>";

 // Example 3

 // Coming of age

 $name = "David Erazo";
 $age = 22;
 $comingOfEge = 18;
 $city = "Madrid";
$continent = "Europef";
 if($age >= $comingOfEge){
   echo "$name is coming of age";
   if($continent == "Europe"){
      echo " And your city is $city ";
   }else{
      echo " "."Isn't from Europe";
   }
 }else{
   echo "$name not is coming of age";
 }

echo "<hr>";

// EXAMPLE 4 WITH ELSE IF

$day = 3;

if($day == 1){
   echo "The day is Monday";
}elseif($day == 2){
   echo "The day is Tuesday";
}elseif($day == 3){
   echo "The day is Wednesday";
}

echo "<hr/>";

// EXAMPLE 5 MANY CONDITIONS WITH RANGES
// AGE FOR WORK

$age1 = 18;
$age2 = 64;
$ageUser = 9;

if($ageUser >= $age1 && $ageUser <= $age2){
   echo "<h3>Is abailable to work</h3>";
}else{
   echo "<h3>Isn't abailable to work</h3>";
}

echo "<hr/>";

// EXAMPLE 6 - COUNTRYS THAT TALK SPANISH

$country = "Nigeria";

if($country == "Mexico" || $country == "Colombia" || $country == "Panamá"){
   echo "In this country talks spanish";
}else{
   echo "In this country doesn't talk spanish";
}
echo "<hr/>";

// EXAMPLE 6 WITH SWITCH

$day = 2;

if($day >= 1 && $day <= 7){
   switch($day){
      case 1:
         echo "Is Monday";
         break;
      case 2:
         echo "Is Tuesday";
         break;
      case 3:
         echo "Is Wednesday";
         break;
      case 4:
         echo "Is Thursday";
         break;
      case 5:
         echo "Is Friday";
         break;
      default:
         echo "Is weekend";
   }
}else{
   echo "The number is out of range";
}
echo "<hr/>";

// EXAMPLE 7 WITH GOTO

goto jump;

echo "Option 1";
echo "Option 2";
echo "Option 3";
echo "Option 4";

jump:
echo "I have jump four options";

echo "<hr/>";







