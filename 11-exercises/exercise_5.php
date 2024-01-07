<?php


if (isset($_GET['number1']) && isset($_GET['number2'])) {
    $n1 = $_GET['number1'];
    $n2 = $_GET['number2'];
    $start = $n1;
    
    for ($i=$start; $i <= $n2 ; $n1++) { 
        if ($n1 !== $start) {
            echo $i;
        }
        $i++;
    }
}else{
    echo "Doesn't data enter by url, number1=x and number2=x";
}