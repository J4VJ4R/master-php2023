<?php

// global variables

$globalName = 'Javier';

function name(){
    global $globalName;
    return $globalName;
}

echo(name());