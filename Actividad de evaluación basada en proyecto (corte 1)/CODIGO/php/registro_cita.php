<?php
include("../config/conexion.php");

$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$usuario_id = $_POST['usuario_id'];

$sql = "INSERT INTO citas(fecha, descripcion, usuario_id)
        VALUES('$fecha','$descripcion','$usuario_id')";

mysqli_query($conexion, $sql);

echo "Cita guardada correctamente";
?>