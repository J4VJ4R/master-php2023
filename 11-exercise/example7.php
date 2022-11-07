<?php

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $counter = $_GET['num1'];
    $limit = $_GET['num2'];

    for($counter; $counter<=$limit; $counter++){
        if(!($counter % 2 == 0)){
            echo('<h3>'.$counter.'</h3>');
        }
    }
}else{
    echo("Enter the values on rul field");
}