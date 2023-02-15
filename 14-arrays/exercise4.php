<?php

$array = [1, 2, 3];
$string = "text";
$int = 55;
$bool = true;
$var = $bool;
switch ($var) {
    case is_array($var):
        # code...
        echo "Tha variable is array";
        break;
    case is_int($var):
        echo "The variable is integer";
        break;
    case is_string($var):
        echo "The variable is string";
        break;
    case is_bool($var):
        echo "The variable is bool";
        break;
    default:
        # code...
        break;
}