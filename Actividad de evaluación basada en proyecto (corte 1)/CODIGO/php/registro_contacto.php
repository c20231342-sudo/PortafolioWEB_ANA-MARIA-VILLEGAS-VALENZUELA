<?php
include("../config/conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$usuario_id = $_POST['usuario_id'];

$sql = "INSERT INTO contactos(nombre, telefono, usuario_id)
        VALUES('$nombre','$telefono','$usuario_id')";

mysqli_query($conexion, $sql);

echo "Contacto guardado correctamente";
?>