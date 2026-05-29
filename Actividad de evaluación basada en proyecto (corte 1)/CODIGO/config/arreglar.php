<?php
$servidor = "127.0.0.1";
$usuario  = "root";
$clave    = "";
$base     = "agenda_web";
$puerto   = 3307; // <--- Tu puerto real 

// Intentamos conectar pasando el puerto como un número separado
$con = mysqli_connect($servidor, $usuario, $clave, "", $puerto);

if (!$con) {
    die("Error de conexión (Puerto $puerto): " . mysqli_connect_error());
} else {
    echo "<h1>¡CONEXIÓN AL SERVIDOR EXITOSA!</h1>";
}

// El resto del código para crear la base de datos...
$sql_db = "CREATE DATABASE IF NOT EXISTS $base";
if (mysqli_query($con, $sql_db)) {
    echo "✅ Base de datos '$base' lista.<br>";
}
?>