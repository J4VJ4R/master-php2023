<?php

// function mul_table($value){
//   if (isset($_GET['number'])) {
//     $number = $_GET['number'];
//     for ($i=0; $i <= 10 ; $i++) { 
//       echo $number . ' ' . 'x' . $i . ' = ' . $number * $i . '<br>';
//     }
//   }else{
//     echo "should are there a number on url";
//   }
// }

// mul_table(5);


function calc($value1, $value2){
  $sum = $value1 + $value2;
  $rest = $value1 - $value2;
  $mul = $value1 * $value2;
  $div = $value1 / $value2;
  $resid = $value1 % $value2;

  echo 'Sum: '.$sum.'<br>';
  echo 'Remains: '.$rest.'<br>';
  echo 'Multiplication: '.$mul.'<br>';
  echo 'Division: '.$div.'<br>';
  echo 'Residue: '.$resid.'<hr>';
}

calc(5, 10);
calc(5, 100);
calc(55, 10);