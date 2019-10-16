<?php
$MiObjeto= new stdClass();

date_default_timezone_set('America/Argentina/Buenos_Aires');
$hora=mktime();

$MiObjeto->Patente=$_GET['patente'];
$MiObjeto->horaIngreso=$hora;
$archivo=fopen('listadoEst.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);

header("Location: okIng.php");
?>