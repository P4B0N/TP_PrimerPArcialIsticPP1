<?php


$archivo = fopen("registro.txt", "r");

while(!feof($archivo)) 
{
$objeto = json_decode(fgets($archivo));
if ($objeto->Usuario == $_GET['usuario']&& $objeto->Clave == $_GET['clave'])
{
header("Location: okLog.php");
fclose($archivo);
exit();
}
else
{
header("Location: UsuarioInex.php");
fclose($archivo);
exit();
}

fclose($archivo);

exit();
}
?>