<?php

$games = array(
    "sports" => array("Fifa", "PES", "Tennis"),
    "war" => array("Tanques", "AK 74", "Guns"),
    "Adventure" => array("GTA", "Crash", "Pug III")
);

$index = array_keys($games);

?>
<table border="1">
    <tr>
        <?php foreach ($index as $key => $value): ?>
            <th><?= $value ?></th>                
        <?php endforeach; ?>
    </tr>
    <?php require_once "modules/sports.php"; ?>
    <?php require_once "modules/war.php"; ?>
    <?php require_once "modules/adventure.php"; ?>
</table>