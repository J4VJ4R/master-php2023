<?php

//variables funciones

function buenosDias(){
    return "Buenos días";
}

function buenosNoches(){
    return "Buenas Noches";
}

$horario = "buenos".$_GET['horario'];

echo $horario();