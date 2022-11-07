<?php

function table($value){
    for($i=0; $i<=10; $i++){
        echo('<h3>'.$value.' * '. $i. ' = '.$value * $i);
    }
}
if(isset($_GET['num'])){
    for($i=0; $i<=10; $i++){
        echo("<h3>Table of $i</h3>");
        table($i);
    }
}else{
    echo("Enter a number");
}