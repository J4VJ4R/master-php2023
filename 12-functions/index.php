<?php


//EJEMPLO 1
function tablaNumber($number){
    echo "TABLE OF NUMBER $number <br>";

    for ($i = 0;$i < 10; $i++){
        $result = $number * $i;
        echo " $number x $i = $result<br>";
    }
    echo "<hr>"; 
}

// if (isset($_GET['number'])){
//     tablaNumber($_GET['number']);
// }else{
//     echo 'No existe tabla';
// }

// for($i = 0; $i < 10; $i++ ){
//     tablaNumber($i);
// }

//EJEMPLO 2

// function calculadora(number1, number2);
tablaNumber(5);