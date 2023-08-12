<?php
$multiplicator = $_GET['number'];
for ($i = 0; $i <= 10 ; $i++) { 
    echo $multiplicator . ' x ' . $i . ' = '. ($multiplicator * $i. '<br>');
}