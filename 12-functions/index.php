<?php



function tablaNumber($number){
    echo "TABLE OF NUMBER $number <br>";

    for ($i = 0;$i < 10; $i++){
        $result = $number * $i;
        echo "number $number x $i = $result<br>";
    }
}
