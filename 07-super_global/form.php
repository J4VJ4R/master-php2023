<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM ON PHP</h1>
    <form action="get.php" method="POST">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="">
        </p>

        <p>
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="">
        </p>

        <input type="submit" value="Send data">
    </form>
</body>
</html>


<?php

