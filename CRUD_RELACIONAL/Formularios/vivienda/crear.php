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
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/vivivenda/index.php">Vivivenda</a>
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
                        <h5 class="card-title text-center">Registrar vivivenda</h5>
                        <form action="<?php echo base_url; ?>CRUDV/insertarDatos.php" method="POST">
                            <div class="mb-3">
                            <label for="proveedor" class="form-label">Nombre del proveedor</label>
                                <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Nombre del proveedor" required>
                            </div>
                            <div class="mb-3">
                                <label for="empleado" class="form-label">Nombre del empleado</label>
                                <input type="text" class="form-control" id="empleado" name="empleado" placeholder="Nombre del empleado" required>
                            </div>
                            <div class="mb-3">
                                <label for="cliente" class="form-label">Nombre del cliente</label>
                                <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre del cliente" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipoVivienda" class="form-label">Tipo de vivienda</label>
                                <input type="text" class="form-control" id="tipoVivienda" name="tipoVivienda" placeholder="Tipo de vivienda" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Direccion de la vivienda</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion de la vivienda" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url; ?>Formularios/vivivenda/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
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