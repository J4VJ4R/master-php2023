<?php

$singers = ['2pac', 'Shackira', 'Robie Williams', 'Alfredo'];

//for ordering

arsort($singers);
// var_dump($singers);

//adding elements in array

$singers[] = 'David';

//delete elements array
array_pop($singers);
unset($singers[2]);
// var_dump($singers);

//random

$index = array_rand($singers);
echo $singers[$index];