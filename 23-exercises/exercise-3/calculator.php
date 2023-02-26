<?php

$number1 = (int)$_POST['number1'];
$number2 = (int)$_POST['number2'];
$mode = $_POST['mode'];
$result = 0;


if (!empty($_POST['number1']) && !empty($_POST['number2'])) {
    # code...
    function calculator($mode, $number1, $number2){
        $result = 0;
        if ($mode == "suma") {
            $result = ($number1 + $number2);
        }
        if ($mode == "resta") {
            $result = ($number1 - $number2);
        }
        if ($mode == "mult") {
            $result = ($number1 * $number2);
        }
        if ($mode == "div") {
            $result = ($number1 / $number2);
        }
        return "<h2> La ".$mode." es: ".$result."</h2>";
    }
}else{
    echo "The data is not complete, enter complete data";
    header('Refresh: 3; URL=./index.php');
}
    

echo calculator($mode, $number1, $number2);