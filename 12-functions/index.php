<?php

function table($value){
    for($i=0; $i<=10; $i++){
        echo('<h3>'.$value.' * '. $i. ' = '.$value * $i);
    }
}
if(isset($_GET['num'])){
    for($i=0; $i<=10; $i++){
        // echo("<h3>Table of $i</h3>");
        // table($i);
    }
}else{
    echo("Enter a number");
}

//get more of two parameters
function calculator($val1, $val2, $negrita = False){
    if($negrita){
        echo('<h1>');
    }
    $suma = $val1 + $val2;
    $resta = $val1 - $val2;
    $mult = $val1 * $val2;
    $div = $val1 / $val2;
    $rest = $val1 % $val2;
    $string = "";
    $string = "suma = $suma <br/>";
    $string .= "resta = $resta <br/>";
    $string .= "mult = $mult <br/>";
    $string .= "div = $div <br/>";
    $string .= "rest = $rest <br/>";
    $string .= "<hr/>";
    if($negrita){
        $string .= '</h1>';
    }
    return $string;

}

echo(calculator(5, 11, 'True'));
echo (calculator(5, 12));
calculator(5, 10);

//return in a function is the correct way

function name($name){
    return $name;
}

echo name("Javier");

// Call a function inside another function

$string = "";

function name2($name){
    $string = $name;
    return $string;
}

function lastN($lastName){
    $string = $lastName;
    return $string;
}

function getNames($name, $lastN){
    $string = name2($name)." ".lastN($lastN);

    return "The full name is: $string";
}
echo("<hr/>");

echo(getNames('Javier', 'Jaramillo'));
