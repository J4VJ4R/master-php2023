<?php

$archivo = $_FILES['archivo'];
var_dump($archivo);
die();

$name = $archivo['name'];
$type = $archivo['type'];

if ($type == "image/png" || $type == "image/jpg" || $type == "image/gif" || $type == "" || $type == "image/jpeg") {
    # code...

}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>"
}