<?php

if(isset($_POST['title']) && isset($_POST['description'])){
    echo "<h1>".$_POST['title']."</h1>";
    echo "<h2>".$_POST['description']."</h2>";
}