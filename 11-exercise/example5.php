<?php

// show number of numbers between two numbers
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
}else{
    echo "Insert correct data on your url";
}


for($num1 = $num1 - 1; $num1 <= $num2; $num1++){
    echo $num1."<br>";
}