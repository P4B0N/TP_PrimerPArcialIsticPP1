<!DOCTYPE html>
<html>
<body>

<h2>VEHICULOS FACTURADOS</h2>

<ol>
	<?php
	$miArchivo = fopen("listaFac.txt", "r") ;
	while(!feof($miArchivo)) {
		$objeto=json_decode(fgets($miArchivo));
  		//if ($objeto->Usuario==$_GET['usuario']) and ($objeto->Contraseña==$_GET['contraseña']);
  		if(isset($objeto)==true)
  			{
  				echo "<li>";
          echo
  		    echo "</li>";
  			}
  		break;
	}
	fclose($miArchivo);
?> 

</ol> 

</body>
</html>

<!--           date("Y-m-d h:i:sa",$objetoVehiculo->Horario)."</li></p><br>";
            }


            echo $objeto->Patente,"·····",$objeto->horaIngreso;-->
            