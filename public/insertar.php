<?php
// Incluir el archivo de configuración
include 'config.php';

// Obtener los datos del formulario

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contacto = $_POST["contacto"];
$direccion = $_POST["direccion"];

// Consulta SQL para insertar los datos
$sql = "INSERT INTO datos (nombre, email, contacto, direccion) VALUES ('$nombre', '$email', '$contacto', '$direccion')";

// Ejecutar la consulta
$result = mysqli_query($conexion, $sql);

// Verificar el resultado de la consulta
if ($result) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
