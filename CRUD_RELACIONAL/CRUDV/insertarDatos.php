<?php

include "../config/conexion.php";

$proveedor = $_POST['proveedor'];
$empleado = $_POST['empleado'];
$cliente = $_POST['cliente'];
$tipoVivienda = $_POST['tipoVivienda'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO tbl_vivienda(proveedor, empleado, cliente, tipoVivienda, descripcion, direccion, precio)
    VALUES ('$proveedor','$empleado','$cliente','$tipoVivienda','$descripcion','$direccion','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/vivienda/index.php");
} else {
    echo "Datos no insertados";
}
