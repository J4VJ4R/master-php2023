<?php

if (isset($_POST['error'])) {
    # code...
    $error = "You should enter complete data";
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
    <form action="procesar_form.php" method="post">

        <label for="name">Nombre</label>
        <input type="text" name="name" required pattern="[A-Za-z]+" id=""><br>
        
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="" required pattern="[A-Za-z]+"><br>
        
        <label for="age">Edad</label>
        <input type="text" name="age" required pattern="[0-9]+" id=""><br>
        
        <label for="email">Correo</label>
        <input type="email" name="email" required  id=""><br>
        
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" required  id=""><br>
        
        <input type="submit" value="Send data">
    </form>
</body>
</html>