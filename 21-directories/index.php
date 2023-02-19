<?php

// Create directories
if (!is_dir("new_folder")) {
    # code...
    echo "The directory does not exists but was created";
    mkdir("new_folder", 0777) or die("Error to create folder");
}else{
    echo "The directory exists";
}


// Delete directories
// rmdir("new_folder");
echo "<hr>";

if($gestor = opendir("./new_folder")){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br>"; 
        }
    }
}

