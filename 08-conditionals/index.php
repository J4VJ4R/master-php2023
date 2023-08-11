


<?php


$edad = 18;
$country = 'Europe';

if ($edad >= 18) {
    echo 'You are old';
    if($country == 'Europe'){
        echo ' and you are Europena';
    }
}elseif($edad < 18){
    echo 'You are young';
}

echo '<hr>';


$day = 1;

if($day == 1){
    echo "Lunes";
}elseif($day == 2){
    echo "Martes";
}

// OPERATOR AND

echo '<hr>';

// Wheater
// 30 to 45 super hot
// 21 to 30 hot
// 0 to 21 cold

$temperature = -10;


if($temperature >= 30 && $temperature <= 45){
    echo 'The weather is super hot';
}elseif($temperature >= 21 && $temperature < 30){
    echo 'The weather is hot';
}elseif($temperature >= 0 && $temperature < 21){
    echo 'The weather is cold';
}else{
    echo 'Temperature out of the range';
}

echo '<hr>';


// Switch

$day = 11;

switch ($day) {
    case 1 :
        echo 'Monday';
        break;
    case 2 :
        echo 'Tuesday';
        break;
    case 3 :
        echo 'Wensday';
        break;
    default:
        echo 'The value should be number between 1 to 3';
        break;
}

// goto
echo '<hr>';

goto jump1;

echo 'first jump';
echo 'second jump';

jump1:
echo 'thirdh jump';