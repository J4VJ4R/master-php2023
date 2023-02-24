<?php

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter']) && $_GET['counter'] == 1) {
    # code...
    $_SESSION['numero']++;
}

if (isset($_GET['counter']) && $_GET['counter'] == 0) {
    # code...
    $_SESSION['numero']--;
}

echo $_SESSION['numero'];
echo "<br>";
?>


<a href="./index.php/?counter=1">Aumentar valor</a>
<br>
<a href="./index.php/?counter=0">Disminuir valor</a>