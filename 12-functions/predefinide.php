<?php


// Debugging
$name = 'javier';

var_dump($name);

// Date
echo("<hr/>");

echo(date('d-m-y'));

// Timestamp
echo("<hr/>");

echo(time());

// Maths
echo("<hr/>");

echo(sqrt(9));

// Random number

echo("<hr/>");
echo(rand(1, 6));

// pi

echo("<hr/>");
echo(pi());

// round
echo("<hr/>");

echo(round(8.489209));

//count characters
echo("<hr/>");

$name = "Javier";

echo('the word contain '.strlen($name).' letters');

//find word or character
echo("<hr/>");

$sentence = "the car w don't work";

echo(strpos($sentence, 'w'));

//change word

echo("<hr/>");
$sentence = str_replace('the', 'you', $sentence);
echo $sentence;
//change uppercase
echo("<hr/>");

echo strtoupper($sentence);
//chage lowercase
echo("<hr/>");

echo strtolower($sentence);