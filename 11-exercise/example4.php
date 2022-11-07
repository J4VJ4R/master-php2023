<?php



if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
    $suma = ($num1 + $num2);
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    $resto = $num1 % $num2;
    //suma
    echo('<h3>'.$suma.'</h3>');
    //resta
    echo('<h3>'.$resta.'</h3>');
    //multiplication
    echo('<h3>'.$mult.'</h3>');
    //division
    echo('<h3>'.$div.'</h3>');
    //resi
    echo('<h3>'.$resto.'</h3>');
}else{
    echo("Enter the number on the url field");
}
