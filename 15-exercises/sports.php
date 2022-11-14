<?php

require_once "./header.php";
echo "<h1>Sports Games</h1>";
echo "<table border='1'>";
foreach($sports as $sport){
    echo '<tr>'
            .'<td>'
                .$sport
            .'</td>'
        .'</tr>';
}
echo "</table>";
