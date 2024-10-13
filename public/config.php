<?php
// Datos de la conexión a Railway
$servername = "";  // MySQL Host Name (Railway)
$username = "root";                       // MySQL User Name (Railway)
$password = "";  // MySQL Password (Railway)
$dbname = "railway";                      // MySQL DB Name (Railway)
$port = 3306;                            // MySQL Port (Railway)

// Crear la conexión a Railway
$conexion = mysqli_connect($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}else{
    echo "Conexión exitosa";
}
?>
