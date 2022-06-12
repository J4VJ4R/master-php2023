
<?php

// All multiplilcation tables in HTML tables

$table1 = $_GET['table1'];
$result = 0;
echo "<table>";
    echo "<tr>";
        for($count = 0; $count <= 10; $count++) {
            $result = $table1 * $count;
            echo "<td>$result</td>";
        }
    echo "<tr>";
echo "</table>";




