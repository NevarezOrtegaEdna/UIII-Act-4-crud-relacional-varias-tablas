<?php

include "../config/conexion.php";

$nomProveedor = $_POST['nomProveedor'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$colonia = $_POST['colonia'];
$numCalle = $_POST['numCalle'];
$nomCalle = $_POST['nomCalle'];

$sql = "INSERT INTO tbl_proveedor(nomProveedor, ciudad, telefono, correo, colonia, numCalle, nomCalle)
    VALUES ('$nomProveedor','$ciudad','$telefono','$correo','$colonia','$numCalle', '$nomCalle')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/proveedor/index.php");
} else {
    echo "Datos no insertados";
}
