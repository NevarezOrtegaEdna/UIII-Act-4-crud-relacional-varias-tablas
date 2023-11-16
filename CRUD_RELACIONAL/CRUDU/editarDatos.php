<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $codigoP = $_POST['codigoP'];
    $zonaH = $_POST['zonaH'];
    $colonia = $_POST['colonia'];
    $nomCalle = $_POST['nomCalle'];
    $numCalle = $_POST['numCalle'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_ubicacion SET estado = '$estado',ciudad = '$ciudad',codigoP = '$codigoP',zonaH = '$zonaH',colonia = '$colonia',nomCalle = '$nomCalle',numCalle = '$numCalle' WHERE id_ubicacion = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/ubicacion/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
