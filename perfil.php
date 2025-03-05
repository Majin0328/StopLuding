<?php
session_start(); // Iniciar sesión (si no lo hemos hecho ya)

// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "Majinviews1$";
$dbname = "StopLuding";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Obtener el ID de usuario almacenado en la variable de sesión
$idUsuario = $_SESSION['idUsuario'];

// Realizar la búsqueda por ID en la tabla usuarios
$sql = "SELECT Nombre, Correo, Contraseña, Imagen FROM usuarios WHERE ID_Usuarios = $idUsuario";
$result = $conn->query($sql);

$nombre = "";
$correo = "";
$contraseña = "";
$idImagen = "";

if ($result->num_rows > 0) {
    // Obtener el primer registro encontrado
    $row = $result->fetch_assoc();
    $nombre = $row["Nombre"];
    $correo = $row["Correo"];
    $contraseña = $row["Contraseña"];
    $idImagen = $row["Imagen"];
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PerfilL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">OTOMIPEDIA</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="indexprincipal.php" style="color:#FFFFFF;">Principal</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contenido.php" style="color:#FFFFFF;">Contenido</a></li>
                        <li class="nav-item"><a class="nav-link" href="evaluar.php" style="color:#FFFFFF;">Evaluar</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php" style="color:#FFFFFF;">Perfil</a>
                        <li class="nav-item"><a class="nav-link" href="contact.php" style="color:#FFFFFF;">Contacto</a>
                        <li class="nav-item"><a class="nav-link" href="index.php" style="color:#FFFFFF;">Cerrar Sesion</a></li>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <style>
            .container-wrapper {
      display: flex;
    }
        </style>


        <header class="py-3">
          <header class="py-5">
              <div class="container px-5 pb-5">
                  <div class="row gx-5 align-items-center">
                      <div class="col-xxl-5">
                          <!-- Header text content-->

                          <div class="text-center text-xxl-start">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                                  <div class="card border-0 shadow rounded-3 my-5">
                                    <div class="card-body p-4 p-sm-5">
                                      <h5 class="navbar-brand text-center mb-6">OTOMIPEDIA</h5>
                                      <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: Lucida Sans">Perfil de Usuario</h5>


                                        <style>
                                            .profile-img {
                                                width: 150px;
                                                height: 150px;
                                            }
                                        </style>



                                        <img id="profile-image" class="profile-img" src="" alt="..." />
                                        <br><br>
                                        <button onclick="previousImage()">Anterior</button>
                                        <button onclick="nextImage()">Siguiente</button>

                                        <script>
    var imageIndex = <?php echo $idImagen; ?>;
    var images = [
        "images/perfil1.jpeg",
        "images/perfil2.jpeg",
        "images/perfil3.jpeg",
        "images/perfil4.jpeg",
        "images/perfil5.jpeg"
    ];
    var defaultImage = images[0];

    function previousImage() {
        imageIndex--;
        if (imageIndex < 0) {
            imageIndex = images.length - 1;
        }
        updateImage();
        updateIdImagen();
    }

    function nextImage() {
        imageIndex++;
        if (imageIndex >= images.length) {
            imageIndex = 0;
        }
        updateImage();
        updateIdImagen();
    }

    function updateImage() {
        var profileImage = document.getElementById("profile-image");
        profileImage.src = images[imageIndex];
    }

    function updateIdImagen() {
        var idImagenInput = document.getElementById("idimagen");
        idImagenInput.value = imageIndex;
    }

    window.addEventListener("load", function() {
        updateImage();
        updateIdImagen();
    });
</script>

<form action="editar.php" method="POST">
    <div>.</div>
    <div id="Usuarios" class="form-floating mb-3">
        <tr>
            <td>
                <input type="text" class="form-control" id="idbusca" name="idbusca" placeholder="id" style="background-color: white; display:none" value="<?php echo $idUsuario; ?>"readonly />
            </td>
        </tr>
        <td>
                <input type="text" class="form-control" id="idimagen" name="idimagen" placeholder="id" style="background-color: white;  display:none" value=""readonly />
            </td>
    </div>
    <div id="Usuarios" class="form-floating mb-3">
        <tr>
            <td>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" style="background-color: white;" value="<?php echo $nombre; ?>" />
            </td>
            <td>
                <label for="floatingInput" style="font-family: Lucida Sans">nombre</label>
            </td>
        </tr>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="correoelectronico" name="correoelectronico" placeholder="name@example.com" style="background-color: white;" value="<?php echo $correo; ?>">
        <label for="floatingInput" style="font-family: Lucida Sans">correo electronico</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control fw-bolder" id="contraseña" name="contraseña" placeholder="Password" style="background-color: white;" value="<?php echo $contraseña; ?>">
        <label for="floatingPassword" style="font-family: Lucida Sans">contraseña</label>
    </div>
    <div class="d-grid">
        <button name="EDITAR" class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" style="font-family: Lucida Sans">EDITAR</button>
        <hr class="my-4">
    </div>
</form>
                                       <form action="eliminar.php" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar el perfil?');">
                                        <div>
                                        
                                        <td>
                                         <input type="text" class="form-control" id="idbusca" name="idbusca" placeholder="id" style="background-color: white;display: none;" value="<?php echo $idUsuario; ?>" />
                                      </td>        
                                         
                                          <button name="ELIMINAR_PERFIL" class="btn btn-google btn-login text-uppercase fw-bold" type="submit" style="font-family: Lucida Sans">
                                            <a >ELIMINAR PERFIL</a>
                                          </button>
                                          <hr class="my-4">
                                        </div>
                                        
                                      </form>                    
                                        <button name="REGRESAR"class="btn btn-google btn-login text-uppercase fw-bold" style="font-family: Lucida Sans">
                                            <a href="indexprincipal.php">REGRESAR</a>
                                          </button>
                               </div>
                          </div>
                      </div>
                      <div class="col-xxl-7">
                          <!-- Header profile picture-->
                          <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                                  <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                  <!-- Watch a tutorial on how to do this on YouTube (link)-->

                                      <!-- SVG Dots-->

                                      <!-- END of SVG dots-->
                                  </div>
                                  <div class="dots-2">
                                      <!-- SVG Dots-->

                                      <!-- END of SVG dots-->
                                  </div>
        </header>

        <header class="py-3">
            <div class="container pb-5">

            </div>
        </header>

        <header class="py-3">
            <div class="container pb-5">

            </div>


    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0" style="color:#FFFFFF;"> OTOMIPEDIA &copy; DERECHOS RESERVADOS 2023</div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
