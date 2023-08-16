<?php

// Count characters of string

$string = '123345j';

echo strlen($string);

echo '<hr>';

// find character

echo strpos($string, '3');
echo '<hr>';

// Change word

$phrase = 'The life is beutiful';
$new_phrase = str_replace('life', 'bird', $phrase);
echo $new_phrase;


// uppercase and lowercase

echo '<hr>';
echo strtoupper($phrase);
echo '<hr>';

echo strtolower($phrase);