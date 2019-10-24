<?php
session_start();
?>

<?php
if (isset($_SESSION['nombre']))
{
?>
<h1>Bienvenido</h1>
<?php
}
else
{
echo "no estas logueado";
}
?>