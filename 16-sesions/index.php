<?php

//sessions

session_start();

$_SESSION['sesion_activa'] = 'variable activa';

echo $_SESSION['sesion_activa'] = 'variable activa';
