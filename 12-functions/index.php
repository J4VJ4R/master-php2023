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

    echo("suma = $suma <br/>");
    echo("resta = $resta <br/>");
    echo("mult = $mult <br/>");
    echo("div = $div <br/>");
    echo("rest = $rest <br/>");
    echo("<hr/>");
    if($negrita){
        echo('</h1>');
    }

}

calculator(5, 11, 'True');
calculator(5, 12);
calculator(5, 10);
