<!DOCTYPE html>
<html>
<body>

<h2>LISTA DE USUARIOS</h2>

<ol>
	<?php
	$miArchivo = fopen("registro.txt", "r") ;
	while(!feof($miArchivo)) {
		$objeto=json_decode(fgets($miArchivo));
  		//if ($objeto->Usuario==$_GET['usuario']) and ($objeto->Contraseña==$_GET['contraseña']);
  		if(isset($objeto)==true)
  			{
  			echo "<li>";
  		    echo $objeto->Usuario,"·····",$objeto->Clave;
  		    echo "</li>";
  			}
  		
	}
	fclose($miArchivo);
?> 

</ol> 

</body>
</html>
