<?php

//array

$movies = array("Drácula", "Ironman", "The Avengers");

$songs = ['Shakira', 'MK', 'U2', 'DREAMS'];

print_r($movies);
echo("<hr/>");

print_r($songs);

// shoy array with for
echo("<hr/>");
echo "<ul>";
for($i=0; $i<count($movies); $i++){
    echo "<li>". $movies[$i]."</li>";
}
echo "</ul>";

// show array with foreach
echo("<hr/>");
echo "<ul>";
foreach($songs as $song){
    echo "<li>". $song."</li>";
}
echo "</ul>";

// asociative arrays
echo("<hr/>");

$menu_day = array(
    'breack_fast' => 'eggs',
    'lunch' => 'potato',
    'late_nigth' => 'coffee'
);

print_r($menu_day);



