<?php

require_once "./header.php";
echo "<h1>Adventure Games</h1>";
echo "<table border='1'>";
foreach($adventures as $adventure){
    echo '<tr>'
            .'<td>'
                .$adventure
            .'</td>'
        .'</tr>';
}
echo "</table>";
