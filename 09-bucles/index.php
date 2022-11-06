<?php

echo("<hr>");

// Bucle while

$num = 0;

while($num <= 20){
    echo($num);
    if($num != 20){
        echo(', ');
    }
    $num++;
}

echo("<hr>");

// Table of multiplication

if(isset($_GET['num1'])){
    $num1 = $_GET['num1'];
    echo($num1);
}else{
    echo("Enter a number for url example: /?num1=11");
}

echo("<hr>");
