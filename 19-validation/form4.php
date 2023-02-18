<?php
if (isset($_GET['error'])) {
    # code...
    var_dump($_GET['error']);
    if ($_GET['error'] == "name") {
        # code...
        $error = "Ingresa un nombre correcto";
    }

    if ($_GET['error'] == "error") {
        # code...
        $error = "Enter all data";
    }

    if ($_GET['error'] == "lastname") {
        # code...
        $error = "Enter a correct lastname";
    }

    if ($_GET['error'] == "age") {
        # code...
        $error = "Enter a correct age only numbers";
    }

    if ($_GET['error'] == "email") {
        # code...
        $error = "Enter a correct email";
    }

    if ($_GET['error'] == "password") {
        # code...
        $error = "The password should to have more than 5 characters";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <h3 style="color: red;" ><?= $error ?> </h3>
    <form action="procesar_form.php" method="POST">

        <label for="name">Nombre</label>
        <input type="text" name="name" required pattern="[A-Za-z]+" id=""><br>
        
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="" required pattern="[A-Za-z]+"><br>
        
        <label for="age">Edad</label>
        <input type="text" name="age" required pattern="[0-9]+" id=""><br>
        
        <label for="email">Correo</label>
        <input type="email" name="email" required  id=""><br>
        
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" required><br>
        
        <input type="submit" value="Send data">
    </form>
</body>
</html>