<?php
session_start();
?>

<?php
if (isset($_SESSION['nombre']))
{
echo"bienvenido ".$_SESSION['nombre'];
}
else
{
echo "no estas logueado";
}
?>