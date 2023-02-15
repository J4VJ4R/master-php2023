<?php

session_start();

$_SESSION['sesion del usuario'] = "usuario ha iniciado la sesion";

echo $_SESSION['sesion del usuario'];