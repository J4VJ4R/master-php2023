<?php
$error = "You should enter all data";
if(isset($_POST['name']) &&
    isset($_POST['lastname']) &&
    isset($_POST['age']) &&
    isset($_POST['email']) &&
    isset($_POST['pass'])){
        $name = isset($_POST['name']);
        $lastname = isset($_POST['lastname']);
        $age = isset($_POST['age']);
        $email = isset($_POST['email']);
        $pass = isset($_POST['pass']);

        header('Location:form4.php/?error=error');

    }else{
        $error = "You should enter all data";
        header('Location:form4.php/?error=error');

    }