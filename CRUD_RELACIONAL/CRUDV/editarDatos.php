<?php
//TABLA VIVIENDA

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $proveedor = $_POST['proveedor'];
    $empleado = $_POST['empleado'];
    $cliente = $_POST['cliente'];
    $tipoVivienda = $_POST['tipoVivienda'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];
    $precio = $_POST['precio'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_vivienda SET proveedor = '$proveedor',empleado = '$empleado',cliente = '$cliente',tipoVivienda = '$tipoVivienda',descripcion = '$descripcion',direccion = '$direccion',precio = '$precio' WHERE id_vivienda = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/vivienda/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
