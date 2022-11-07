<?php

//array

$movies = array("Drácula", "Ironman", "The Avengers");

$songs = ['Shakira', 'MK'];

print_r($movies);
echo("<hr/>");

print_r($songs);
// shoy array with for
echo("<hr/>");
echo "<lu>";
for($i=0; $i<count($movies); $i++){
    echo "<li>". $movies[$i]."</li>";
}
echo "</lu>";
