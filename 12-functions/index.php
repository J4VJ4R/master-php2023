<?php

function mul_table($value){
  if (isset($_GET['number'])) {
    $number = $_GET['number'];
    for ($i=0; $i <= 10 ; $i++) { 
      echo $number . ' ' . 'x' . $i . ' = ' . $number * $i . '<br>';
    }
  }else{
    echo "should are there a number on url";
  }
}

mul_table(5);