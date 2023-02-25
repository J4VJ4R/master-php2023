<?php

$email = $_GET['email'];

function validateEmail($email){
    $error = "No valido";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        # code...
        $error = "Valido";
    }
    return $error;
    
}

if (isset($_GET['email'])) {
    echo validateEmail($email);
}