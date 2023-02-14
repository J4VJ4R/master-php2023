<?php

// Associtive arrays
$user = [
    "name" => "Javier",
    "lastname" => "Jaramillo",
    "level" => "Senior"
];

// var_dump($user["name"]);

// var_dump($_GET);


// Multidimensional arrays
$contacts = array(
    array(
        "name" => "Bereta",
        "lastname" => "Barco",
        "email" => "ner@Ams.com"
    ),
    array(
        "name" => "Carlos",
        "lastname" => "Castillo",
        "email" => "car@Ams.com"
    ),
    array(
        "name" => "Daniel",
        "lastname" => "Daniels",
        "email" => "daniel@Ams.com"
    ),
    array(
        "name" => "America",
        "lastname" => "Amstrong",
        "email" => "Ame@Ams.com"
    )
);
echo "<hr>";
echo "<ul>";
foreach ($contacts as $value) {
    echo "<li>".$value["email"]."</li>";
}
echo "</ul>";
