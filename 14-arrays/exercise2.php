<?php

$box_numbers = [];
$n1 = 0;

while ($n1 <= 100) {
    array_push($box_numbers, $n1);
    $n1++;
}

foreach ($box_numbers as $key => $value) {
    # code...
    echo "<li>".$value."</li>";
}

