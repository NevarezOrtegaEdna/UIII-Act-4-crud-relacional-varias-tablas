<?php

include "../config/conexion.php";

$estado = $_POST['estado'];
$ciudad = $_POST['ciudad'];
$codigoP = $_POST['codigoP'];
$zonaH = $_POST['zonaH'];
$colonia = $_POST['colonia'];
$nomCalle = $_POST['nomCalle'];
$numCalle = $_POST['numCalle'];

$sql = "INSERT INTO tbl_ubicacion(estado, ciudad ,codigoP ,zonaH ,colonia ,nomCalle ,numCalle )
    VALUES ('$estado','$ciudad','$codigoP','$zonaH','$colonia','$nomCalle','$numCalle')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/ubicacion/index.php");
} else {
    echo "Datos no insertados";
}
