<?php

function calc($n1, $n2){
  echo 'Addition = '. $n1 + $n2 .'<br/>';
  echo 'Substraction = '. $n1 - $n2 .'<br/>';
  echo 'Multiplication = '. $n1 * $n2 .'<br/>';
  echo 'Division = '. $n1 / $n2 .'<br/>';
  echo 'Residue = '. $n1 % $n2 .'<br/>';
}

calc(100, 50);