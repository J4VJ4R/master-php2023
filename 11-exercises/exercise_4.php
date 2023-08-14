<?php


if (isset($_GET['number1']) && isset($_GET['number2'])) {
    
    $n1 = $_GET['number1'];
    $n2 = $_GET['number2'];
    
    echo 'Sum = '. $n1 + $n2.'<br>';
    echo 'Sub = '. $n1 - $n2.'<br>';
    echo 'Mul = '. $n1 * $n2.'<br>';
    echo 'Div = '. $n1 / $n2.'<br>';
    echo 'Resid = '. $n1 % $n2.'<br';
}else{
    echo "Enter a number for url"; //test
}