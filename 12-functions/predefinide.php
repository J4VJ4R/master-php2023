<?php

//dates

echo date('d-m-Y');

echo " <br />", time();

//math

echo "<br> Sqrt of 10: ".sqrt(10);

//random number

echo "<br> Random number between 1 and 10 = ".rand(1, 10);

//number PI

echo "<br> Number PI = ".pi();

//round number

echo "<br> Round number ".round(7.8900, 2);


//more general functions
$number = 10;
echo "<br>". gettype($number);


if(is_integer($number)){
    echo "<br>It is a number";
}else{
    echo "<br> it is not a number";
}