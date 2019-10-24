<?php
session_start();
var_dump($_GET);
var_dump($_SESSION);
$_SESSION['nombre']=$_GET["usuario"];
echo "<br>";
var_dump($_SESSION);
?>