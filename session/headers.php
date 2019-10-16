
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
            <?php if(isset($_SESSION['nombre'])) { ?>
            <li class="nav-item active">
              <a class="nav-link" href="hacerLogout.php">Cerrar sesion<span class="sr-only">(current)</span></a>
            </li>
           <?php } ?>
          </ul>
        </div>
      </nav>
    </header>
   