<?php
// Verificar si se ha enviado el formulario de eliminación
if (isset($_POST['ELIMINAR_PERFIL'])) {
    // Obtener el ID del perfil a eliminar (puedes ajustar el nombre del campo si es necesario)
    $idBusca = $_POST["idbusca"];

    // Realizar la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "Majinviews1$";
    $database = "StopLuding";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Crear la consulta para eliminar el registro
    $sql = "DELETE FROM usuarios WHERE ID_Usuarios = '$idBusca'";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "El registro se ha eliminado correctamente";

        // Redirigir al usuario a index.html
        header("Location: indexprincipal.php");
        exit();
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>