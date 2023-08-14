<?php


if (isset($_GET['number1']) && isset($_GET['number2'])) {
    $n1 = $_GET['number1'];
    $n2 = $_GET['number2'];
    $start = $n1;
    
    for ($n1=$start; $n1 < $n2 ; $n1++) { 
        if ($n1 !== $start) {
            echo $n1;
        }
        $n1++;
    }
}else{
    echo "Doesn't data enter by url, number1=x and number2=x";
}