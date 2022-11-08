<?php

$numbers = [1, 2, 3, 7, 10, 4];
function show_numbers($array){
    $result = "";
    foreach($array as $number){
        $result .= "<h3>".$number."</h3>";
    }
    return $result;
}

//sort
sort($numbers);
echo show_numbers($numbers);
echo "<hr/>";
//asort
asort($numbers);

echo show_numbers($numbers);

//add items with normal form 
echo "<hr/>";
$numbers[] = 11;
echo show_numbers($numbers);

//add items with push form 
echo "<hr/>";
array_push($numbers, 110);
echo show_numbers($numbers);


//search
echo "<hr/>";
if(isset($_GET['search']))
{
    $search = $_GET['search'];
    $result = array_search($search, $numbers);
    if(!empty($result)){
        echo "The number was find it in the index $result";
    }else{
        echo "The searh don't was results";
    }
}
//count
echo "<hr/>";
echo count($numbers);