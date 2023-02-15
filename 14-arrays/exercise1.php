<?php

$box_numbers = [1, 7, 10, 2, 4, 5];

foreach ($box_numbers as $key => $value) {
    # code...
    echo "<li>".$value."</li>";
}

// Ordering array
echo "<hr>";
$box_numbers = [1, 7, 10, 2, 4, "5"];
sort($box_numbers);
foreach ($box_numbers as $key => $value) {
    # code...
    echo "<li>".$value."</li>";
}
echo "<hr>";

// Show its long
$len = count($box_numbers);
echo $len;
echo "<hr>";

// Searching in the array
$search = $_GET['number'];

$match = array_search($search, $box_numbers);

if (!empty($match)) {
    # code...
    echo "Find element in the position: ".$match;
}else{
    echo "Don't Find element";

}
echo "<hr>";
