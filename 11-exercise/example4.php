<?php

//get two numbers of url parameter


if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
}else{
    echo "Please insert correct data for url";
}

echo "The sum of $num1 + $num2 is: " .($num1 + $num2)."<br>";
echo "The rest of $num1 - $num2 is: " .($num1 - $num2)."<br>";
echo "The multiplication of $num1 x $num2 is: " .$num1 * $num2."<br>";
echo "The division of $num1 / $num2 is: " .$num1 / $num2."<br>";
echo "The residue of $num1 % $num2 is: " .$num1 % $num2."<br>";