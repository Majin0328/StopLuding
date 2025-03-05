<?php
session_start(); // Iniciar sesión (si no lo hemos hecho ya)

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// CONEXION
$conexion = mysqli_connect("localhost", "root", "Majinviews1$", "StopLuding");

$consulta = "SELECT * FROM usuarios WHERE Correo='$correo' and Contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    // Obtener el ID de usuario
    $row = mysqli_fetch_assoc($resultado);
    $idUsuario = $row['ID_Usuarios'];

    // Guardar el ID de usuario en una variable de sesión
    $_SESSION['idUsuario'] = $idUsuario;

    // Cerrar la conexión y guardar los datos de sesión
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    session_write_close();

    // Redireccionar a perfil.php
    header("Location: indexprincipal.php");
    exit;
} else {
    header("Location: errorlogin.php");
    exit;
}
?>