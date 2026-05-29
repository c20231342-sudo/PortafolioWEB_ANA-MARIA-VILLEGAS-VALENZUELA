<?php
// Reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Usamos 127.0.0.1 que es la dirección física de tu PC
$conexion = mysqli_connect("127.0.0.1", "root", "", "agenda_web", 3307);

if ($conexion) {
    echo "<h1>¡CONEXIÓN EXITOSA!</h1>";
} else {
    echo "<h1>Error de conexión:</h1> " . mysqli_connect_error();
}
?>