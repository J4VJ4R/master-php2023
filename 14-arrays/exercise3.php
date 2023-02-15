<?php

$var = "Some second text";

if (empty($var)) {
    # code...
    $var = "Some text to show";
    $var = strtolower($var);
    echo "<h1>".strtoupper($var)."</h1>";
}else{
    $var = strtoupper($var);
    echo "<h1>".strtoupper($var)."</h1>";

}