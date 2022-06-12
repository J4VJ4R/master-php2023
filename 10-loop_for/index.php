<?php

echo "<h1>BUCLE FOR</h1>";
echo "<h1>EXAMPLE 1</h1>";

$sum = 0;
for($num = 0; $num <= 10; $num++){
    $sum += $num;
    echo "<h3>$sum</h3>";
}

echo "The sum is: $sum";

echo "<hr>";


$num = (int)$_GET['number'];

echo "<h1>EXAMPLE 2 - MULTIPLICATION TABLE OF $num</h1>";

$result = 0;
for($counter = 0; $counter <= 10; $counter++){
    $result = $num * $counter;
    echo "<h3> $num x $counter = $result</h3>";
}
