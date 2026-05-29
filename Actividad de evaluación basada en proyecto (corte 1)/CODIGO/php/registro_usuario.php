<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../config/conexion.php");

// Verificamos que venga por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = sha1($_POST['password']); // HASH obligatorio

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (nombre, correo, password)
            VALUES ('$nombre', '$correo', '$password')";

    if (mysqli_query($conexion, $sql)) {
        echo "Usuario registrado correctamente";
    } else {
        echo "Error al registrar: " . mysqli_error($conexion);
    }

} else {
    echo "Acceso no permitido";
}
?>