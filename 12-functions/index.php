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


function calc($value1, $value2, $strong = false){
  $sum = $value1 + $value2;
  $rest = $value1 - $value2;
  $mul = $value1 * $value2;
  $div = $value1 / $value2;
  $resid = $value1 % $value2;

  $string = '';
  if($strong){
    $string .= '<h1>';
  }
  $string .= 'Sum: '.$sum.'<br>';
  $string .= 'Remains: '.$rest.'<br>';
  $string .= 'Multiplication: '.$mul.'<br>';
  $string .= 'Division: '.$div.'<br>';
  $string .= 'Residue: '.$resid.'<hr>';
  if($strong){
    $string .= '</h1>';
  }
  return $string;
}

echo calc(5, 10);
echo calc(5, 10, true);

echo '<hr>';

function getName($name){
  $txt = $name;
  return $txt;
}

function getLastName($lastname){
  $txt = $lastname;
  return $txt;
}

function getFullName($name, $lastname){
  $txt = getName($name).'<br/>'. getLastName($lastname);
  return $txt;
}

echo getFullName('Javier', 'Jara');