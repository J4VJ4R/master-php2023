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

//Asociative arrays
echo "<br>";
$persons = array(
  "Name" => "Javier",
  "Lastname" => "Jaramillo",
  "web" => "www.jara.com.co"
);
echo "<hr>";

foreach ($persons as $person) {
  echo $person."<br>";
}

//Multidimensional arrays
$contacts = array(
  array(
    "name" => "Javier",
    "email" => "javi@gmail.com",
  ),
  array(
    "name" => "Lilian",
    "email" => "lili@gmail.com",
  ),
  array(
    "name" => "Ana",
    "email" => "ana@gmail.com",
  ),
);

echo "<hr>";

foreach ($contacts as $key => $contact) {
  echo $contact['email']."<br>";
}