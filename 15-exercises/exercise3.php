<?php

$val = "";

if(empty($val)){
    $val = "texto";
    echo '<strong>'.strtoupper($val).'</strong>';
}else{
    echo "ther are data: $val";
}