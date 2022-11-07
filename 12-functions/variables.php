<?php

// global variables

$globalName = 'Javier';

function name(){
    global $globalName;
    return $globalName;
}

echo(name());

// variables functions
echo("<hr/>");

function goodMorning(){
    return "<h2>good morning Javier</h2>";
}

function goodAfternoon(){
    return'<h2>good afternoon Javier</h3>';
}

function goodEvening(){
    return '<h3>good evening Javier</h3>';
}
if(isset($_GET['horario'])){
    $horario = $_GET['horario'];
    $saludo = "$horario";
    echo($saludo());
}else{
    echo("enter horario on url field");
}





