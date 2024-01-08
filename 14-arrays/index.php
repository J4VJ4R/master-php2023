<?php

$movies = array('Batman', "spiderman", "Thor");

for ($i=0; $i < count($movies) ; $i++) { 
  echo $movies[$i]."<br>";
}
echo "<hr>";


//With foreach
foreach ($movies as $movie) {
  echo $movie."<br>";
}