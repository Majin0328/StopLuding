<?php 
    $host ="localhost";
    $user ="root";
    $pass ="";
    $db="formularios";

    $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
//Variables para guardar los datos con el nombre que se le asigno a cada text
    $nombre=$_POST['name'];
    $correo=$_POST['email'];
    $telefono=$_POST['tel'];
    $mensaje=$_POST['message'];
// Valores en el orden que esten en la base de datos
    $sql="INSERT INTO contactarnos VALUES('$nombre',
                                         '$correo',
                                         '$telefono',
                                         '$mensaje')";

    $ejecutar=mysqli_query($con,$sql);

    if (!$ejecutar) {
        echo "Hubo un error";
    } else {
        echo "Datos guardados correctamente <br><a href=''>Volver</a>";
    }
 ?>