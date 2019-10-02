<?php
$MiObjeto= new stdClass();
$MiObjeto->Patente=$_GET['Patente'];


$archivo=fopen('estacionados.txt', 'r');

while(!feof($archivo)) {
		$objeto=json_decode(fgets($archivo));

		//var_dump($objeto);
		if ($objeto->Patente==$_GET['Patente'])

		{

	echo "<li>";
  	echo $objeto->Patente."·····".$objeto->Hora;
  	echo "</li>";






		}



}
//$archivo=fopen('estacionados.txt', 'a');

fclose($archivo);

//header("Location: okIng.php");
?>