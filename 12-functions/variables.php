<!-- Variables function -->

<?php

function goodMorning(){
    return "hi good morning";
}

function goodAfternoon(){
    return "What append the diner";
}

function goodEvening(){
    return "goodEvening";
}

$schedulle = $_GET['schedulle '];

$greating = "hello ".$schedulle();

echo $greating;
