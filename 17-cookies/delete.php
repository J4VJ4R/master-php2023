<?php

setcookie('mycookie', '', time()-100);
header('Location:show.php');