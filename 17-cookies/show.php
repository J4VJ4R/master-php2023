<?php

if ($_COOKIE['mycookie']) {
    # code...
    echo $_COOKIE['mycookie'];
}else{
    echo "There aren't cookies";
}

if ($_COOKIE['cookie_year']) {
    # code...
    echo $_COOKIE['cookie_year'];
}else{
    echo "There isn't cookies year";
}


?>

<a href="create.php">Create cookie</a>
<a href="delete.php">Delete cookie</a>