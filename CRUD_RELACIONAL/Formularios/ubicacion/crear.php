<?php
require_once("../../config/conexion.php");
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/proveedor/index.php">Proveedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/vivienda/index.php">Vivienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/ubicacion/index.php">Ubicacion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR UBICACION</h5>
                        <form action="<?php echo base_url; ?>CRUDU/insertarDatos.php" method="POST">
                            <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
                            </div>
                            <div class="mb-3">
                                <label for="codigoP" class="form-label">Codigo Postal</label>
                                <input type="text" class="form-control" id="codigoP" name="codigoP" placeholder="Codigo Postal" required>
                            </div>
                            <div class="mb-3">
                                <label for="zonaH" class="form-label">Zona Horaria</label>
                                <input type="time" class="form-control" id="zonaH" name="zonaH" placeholder="Zona Horaria" required>
                            </div>
                            <div class="mb-3">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" required>
                            </div>
                            <div class="mb-3">
                                <label for="numCalle" class="form-label">Numero de la calle</label>
                                <input type="text" class="form-control" id="numCalle" name="numCalle" placeholder="Numero de la calle" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomCalle" class="form-label">Nombre de la calle</label>
                                <input type="text" class="form-control" id="nomCalle" name="nomCalle" placeholder="Nombre de la calle" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/ubicacion/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>

</body>

</html>