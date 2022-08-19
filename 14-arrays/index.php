<?php

//Arrays

$movie = "Batman";
$movies = array('Batman', 'Spider man', 'El señor de los anillos');
$singers = ['2pac', 'Shackira', 'Robie Williams'];
$people = array(
    'Name' => 'Javier',
    'Last name' => 'Jaramillo'
);

echo $people['Name']."<br>";
echo $movies[0];
echo "<br>".$singers[0];

//range with for

echo "<h2> List of movies<h2>";
echo "<ul>";
for($i = 0; $i < count($movies); $i++){
    echo "<li>".$movies[$i]."</li>";
}
echo "</ul>";

//range with foreach
echo "<h2>List of singers";

echo "<ul>";
foreach($singers as $singer){
    echo "<li>".$singer."</li>";
}
echo "</ul>";

//arrays multidimensionales

$contacts = array(
    array(
        'Name' => 'Elliot',
        'Last name' => 'Mr Robot'
    ),
    array(
        'Name' => 'Javier',
        'Last name' => 'Discovery'
    ),
    array(
        'Name' => 'Ely',
        'Last name' => 'Control'
    )
);
echo "<hr>";
foreach($contacts as $key => $contact){
    echo $contact['Name']."<br>";
}
