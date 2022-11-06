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