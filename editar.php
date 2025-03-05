<?php
// Obtener los valores enviados desde el formulario
$idBusca = $_POST['idbusca'];
$idImagen = $_POST['idimagen'];
$nombre = $_POST['nombre'];
$correo = $_POST['correoelectronico'];
$contraseña = $_POST['contraseña'];

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "Majinviews1$";
$dbname = "StopLuding";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Construir la consulta SQL para actualizar los datos
$sql = "UPDATE usuarios SET Nombre = '$nombre', Correo = '$correo', Contraseña = '$contraseña' , Imagen = '$idImagen' WHERE ID_Usuarios = '$idBusca'";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se actualizaron correctamente en la base de datos.";

    // Redirigir al usuario a index.php
    header("Location: perfil.php");
    exit();
} else {
    echo "Error al actualizar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>






