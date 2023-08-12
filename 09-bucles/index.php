<?php

//example 1

// $number = 0;

// while ($number <= 100) {
//     echo $number.', ';
//     $number++;
// }

// exmaple 2 multiplication table

$number = $_GET['number'];
$multiplicator = 0;
echo '<h2>Tabla de multiplicar del '.$number;
while ($multiplicator <= 10) {
    echo $number.' x '. $multiplicator. ' = '. ($number * $multiplicator). '<br>';
    $multiplicator++;
}

echo '<hr>';
$a = 0;
do {
    echo 'Put on jacket<br>';
    $a++;
} while ($a <= 10 && $temperature <= 21);