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
    <header>
      <!-- Fixed navbar -->
     <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">ESTACIONAMIENTO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="registro.php">REGISTRO<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">INICIAR SESIÓN</a>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link" href="listadoUsuarios.php">USUARIOS<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="listadoEst.php">ESTACIONADOS<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="Facturar.php">FACTURAR <span class="sr-only">(current)</span></a>
            </li>

             <li class="nav-item active">
              <a class="nav-link" href="facturados.php">FACTURADOS<span class="sr-only">(current)</span></a>
            </li>
           
          </ul>
        </div>
      </nav>
    </header>
    <!-- Begin page content -->
       <main role="main" class="container">
        <h1>Vehiculos facturados</h1>
      
    <?php

  $totalFacturado = 0;

    $archivo = fopen("facturados.txt", "r");
    while(!feof($archivo)) 
    {
      $objeto = json_decode(fgets($archivo));
      if ($objeto != "") 
      {

      echo "<li>";
      echo "vehiculo: "  .$objeto->Vehiculo. "fecha/hora ingreso: "  .$objeto->fechaEntrada. "fecha/hora salida: "  .$objeto->fechaSalida. "cobro:$ " .$objeto->importe;
      echo "</li>";

        $totalFacturado = $totalFacturado + $objeto->importe;
      }
    }

    echo "<h1> TOTAL FACTURADO: $".$totalFacturado."</h1>";
    fclose($archivo);
  ?>
      
    </main>
    <img src="est.jpg"height="400">
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