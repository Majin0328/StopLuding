<?php
require "conexion.php";
$nombre =$_POST ['nombre'];
$correo =$_POST ['correo'];
$contraseña =$_POST ['contraseña'];

$sql=" INSERT INTO usuarios (Nombre,Correo,Contraseña)
values ('$nombre','$correo','$contraseña')";
$resultado=$mysqli->query($sql);


if ($resultado>0)  header("Location:indexprincipal.php");
				
else    echo "ERROR AL AGREGAR EL REGISTRO";

?>