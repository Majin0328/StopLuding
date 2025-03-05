<?php
require "conexion.php";
$nombre =$_POST ['Nombre'];
$correo =$_POST ['Correo'];
$telefono =$_POST ['Telefono'];
$mensaje =$_POST ['Mensaje'];

$sql=" INSERT INTO contacto (Nombre,Correo,Telefono,Mensaje)
values ('$nombre','$correo','$telefono','$mensaje')";
$resultado=$mysqli->query($sql);


if ($resultado>0)  header("Location:contact2.php");
				
else    echo "ERROR AL AGREGAR EL REGISTRO";

?>