<?php

require_once "./header.php";
echo "<h1>Actions Games</h1>";
echo "<table border='1'>";
foreach($actions as $action){
    echo '<tr>'
            .'<td>'
                .$action
            .'</td>'
        .'</tr>';
}
echo "</table>";
