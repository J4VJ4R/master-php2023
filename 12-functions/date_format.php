<?php
// Establecer la zona horaria a America/Bogota
date_default_timezone_set('America/Bogota');

// Días de la semana en español
$dias_semana = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

// Meses en español
$meses = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

// Obtener el día de la semana, día del mes y mes actual
$dia_semana = date("w"); // 0 (Domingo) a 6 (Sábado)
$dia_mes = date("d");
$mes_actual = date("n"); // 1 (Enero) a 12 (Diciembre)

// Generar la fecha en formato español
$fecha_espanol = $dias_semana[$dia_semana] . ", " . $dia_mes . " de " . $meses[$mes_actual] . " de " . date("Y");

echo $fecha_espanol;


echo '<hr>';
echo time();
?>
