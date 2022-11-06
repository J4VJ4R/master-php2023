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
echo("<h1>Table of: ".$_GET['num1']."</h1>");
$num1 = 0;
if(isset($_GET['num1'])){
    while($num1 <= 10){
        $num2 = $_GET['num1'];
        $result = $num1 * $num2;
        echo("<h3>".$num2." x ". $num1. " = ".$result."</h3>");
        $num1++;
    }
}else{
    echo("Enter a number for url example: /?num1=1");
}

echo("<hr>");
