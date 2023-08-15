<?php

$name = 'Javier';

function name(){
  global $name;
  $lastname = 'Jara';
  echo $name;

  return $lastname;
}
global $lastname;


echo name();
name();