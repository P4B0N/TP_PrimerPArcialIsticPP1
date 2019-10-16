<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>ESTACIONAMIENTO</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body>
  <?php
    include "headers.php";

  ?>
    <!-- Begin page content -->
    <main role="main" class="container">
      <h1>Lista de usuarios</h1>
    <?php
    if (isset($_SESSION['nombre']))
    {

         $miArchivo = fopen("registro.txt", "r") ;
          while(!feof($miArchivo)) 
          {
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

    }
    else
    {

?> 
   <img src="est.jpg"height="400">
<?php
}
?>
    </main>
   
    <footer class="footer">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="popper.min.js"></script>
  </body>
</html>