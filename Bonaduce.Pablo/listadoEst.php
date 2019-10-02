<!DOCTYPE html>
<html>
<body>

<h2>Listado de vehiculos</h2>

<ol>
	<?php
	$miArchivo = fopen("estacionados.txt", "r") ;
	while(!feof($miArchivo)) {
		$objeto=json_decode(fgets($miArchivo));
  	
  		//var_dump($objeto);
  		echo "<li>";
  		echo $objeto->Patente,"·····",$objeto->Hora;
  		echo "</li>";
	}
	fclose($miArchivo);
?> 

</ol> 

</body>
</html>
