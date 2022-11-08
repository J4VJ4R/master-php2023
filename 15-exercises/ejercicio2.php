<?php

$numbers = [1, 2, 3];

if(count($numbers) <= 120){
    for($i=0; $i<=120; $i++){
        array_push($numbers, rand(1, 100));
    }
}

foreach($numbers as $number){
    echo "<h3>$number</h3>";
}