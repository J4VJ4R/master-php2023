<?php

$archivo = $_FILES['archivo'];


$name = $archivo['name'];
$type = $archivo['type'];

if ($type == "image/png" || $type == "image/jpg" || $type == "image/gif" || $type == "" || $type == "image/jpeg") {
    # code...
    if (!is_dir("images")) {
        # code...
        mkdir("./images", 0777);
        move_uploaded_file($archivo['tmp_name'], "./images/".$name );
        echo "<h1>Upload successfull</h1>";
    }else{
        header("Refresh: 5; URL=index.php");
        move_uploaded_file($archivo['tmp_name'], "./images/".$name );
        echo "Upload $name succesfull";
    }

}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Upload only images, jpg, png, jpeg and gif</h1>";
}