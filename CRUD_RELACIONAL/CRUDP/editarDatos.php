<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nomProveedor = $_POST['nomProveedor'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $colonia = $_POST['colonia'];
    $numCalle = $_POST['numCalle'];
    $nomCalle = $_POST['nomCalle'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_proveedor SET nomProveedor = '$nomProveedor',ciudad = '$ciudad',telefono = '$telefono',correo = '$correo', colonia = '$colonia',numCalle = '$numCalle',nomCalle = '$nomCalle' WHERE id_proveedor = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/proveedor/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
