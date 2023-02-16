<?php


setcookie("mycookie", "This is my cookie");

setcookie("cookie_year", "This is a cookie for one year", (time()+60*60*24*365));

header('Location:show.php');

