<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo("<table border='1'>");
        echo("<tr>");
            for($i=0; $i<=10; $i++){
                    echo("<td>Tabla del: ".$i."</td>");
                }
        echo("</tr>");
        for($j=0; $j<=10; $j++){
            echo("<tr>");
                for($i=0; $i<=10; $i++){
                        echo("<td>".$i." * ".$j."  = ".($i * $j)."</td>");
                    }
            echo("</tr>");
        }        
        echo("</table>");
    ?>
</body>
</html>


