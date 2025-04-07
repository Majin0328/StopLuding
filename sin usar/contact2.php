<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contacto</title>
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
                <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">OTOMIPEDIA</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php" style="color:#FFFFFF;">Principal</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact2.php" style="color:#FFFFFF;">Contacto</a>

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

        <div class="container-wrapper">
<div class="container" style="width: calc(33.33% - 2px); height: 700px;">
    <!-- Contenido de la primera división -->
    <div class="row gx-3 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <a href="https://www.tiktok.com/@otomipedia">
<img src="images/tiktok.jpg" alt="tiktok.jpg" width="150" height="150" >
                            </a>
                            <div class="fs-3 fw-light text-muted ">
                                <a class="display-5 fw-bolder nav-link text-gradient d-inline"
                                    href="contenido.html">TikTok</a>
                                <br>
                                <p style="margin-top: 15px">No se te olvide seguir en TikTok donde subimos tips y trucos que seguro hacen mas sencillo tu estudio!</p>
                                <p>Cuentas:</p>

                                <p>OtomipediaOficial</p>
                                <p>OtomipediaSOS</p>
                            </div>
                        </div>
                    </div>
                </div>
  </div>

  <div class="container" style="width: calc(33.33% - 2px); height: 700px;">
    <!-- Contenido de la segunda división -->
      <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <a href="https://www.whatsapp.com/?lang=es">
<img src="images/whats.jpg" alt="whats.jpg" width="150" height="150" >
                            </a>
                            <div class="fs-3 fw-light text-muted"><a
                                    class="display-5 fw-bolder nav-link text-gradient d-inline"
                                    href="contenido.html">Whatsapp</a>
                                <br>
                       <p style="margin-top: 15px">Puedes contactarnos de lunes a viernes de 8 a 20 hrs, ¡Intentaremos responderte a la inmediates!</p>
                                <p>Numeros:</p>

                                <p>7711057277</p>
                                <p>7711057277</p>

                            </div>

                        </div>
                    </div>
                </div>
  </div>

  <div class="container" style="width: calc(33.33% - 2px); height: 700px;">
    <!-- Contenido de la tercera división -->
      <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <a href="https://www.facebook.com/Otomipedia/">
<img src="images/facebook.jpg" alt="facebook.jpg" width="150" height="150" >
                                </a>
                            <div class="fs-3 fw-light text-muted"><a
                                    class="display-5 fw-bolder nav-link text-gradient d-inline"
                                    href="contenido.html">Facebook</a>
                                <br>
                                <p style="margin-top: 15px">Pasate tambien por nuestro facebook donde encontraras:</p>

                                <p>Clases en Vivo!</p>

                                <p>Una comunidad activa!</p>
                                <p>Sorteos exclusivos!</p>
                                <p>Eventos y noticias!</p>

                                <p>OtomipediaOficial</p>

                            </div>

                        </div>
                    </div>
                </div>
         </div>
    </div>
    
    <section>
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    
                    <img class="img-contact" src="images/favicon.png"/>
                    <h1 class="fw-bolder"><span class="text-gradient d-inline">¡Formulario de contacto!</span></h1>
                    <p class="lead fw-normal text-muted mb-0">Rellena los siguientes campos con tus datos</p>
                </div> 
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form action="savecontacto2.php" method="POST">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="Nombre" id="Nombre" type="text" placeholder="Enter your name..." data-sb-validations="required" required/>
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es obligatorio.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="Correo" id="Correo" type="email" placeholder="name@example.com" data-sb-validations="required,email" required />
                                <label for="email">Dirección Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Escribe tu Email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El Email no es valido.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="Telefono" id="Telefono" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número de celular</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Tú número de celular es obligatorio.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="Mensaje" id="Mensaje" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" required></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Formulario de contacto completado</div>
                                    
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al mandar formulario</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
