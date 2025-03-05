
<?php
// Datos de conexión
$servidor = "localhost"; // Nombre del servidor (generalmente localhost)
$usuario = "root"; // Nombre de usuario de la base de datos
$contrasena = "Majinviews1$"; // Contraseña del usuario
$basedatos = "StopLuding"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos.";
?>