<?php
$puntaje = $_GET['puntaje'] ?? 'No disponible';
$nivel = $_GET['nivel'] ?? 'Desconocido';
$consejos = $_GET['consejos'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>StopLuding - INICIO</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images\StopLudingLogoFavIcon.png" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles.css?v=2" rel="stylesheet" />

    <style>
    label {
            color: white;
        }
    </style>
</head>
<body>

<!-- Imagen de fondo 1 -->
<div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 240px; left: 100px; width: 200px; height: 300px;">
    <img src="images/PDVertical.png" alt="Imagen 1" style="width: 100%; height: 100%; object-fit: contain;">
  </div>

  <!-- Imagen de fondo 2 -->
  <div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 650px; left: 1100px; width: 200px; height: 300px;">
    <img src="images/PBVertical.png" alt="Imagen 2" style="width: 100%; height: 100%; object-fit: contain;">
  </div>

  <!-- Imagen de fondo 3 -->
  <div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 1150px; left: 180px; width: 200px; height: 300px;">
    <img src="images/PDVertical.png" alt="Imagen 3" style="width: 100%; height: 100%; object-fit: contain;">
  </div>

    <?php include('navbar.php'); ?>

    <>
        <div class="container text-center mt-5 animate-on-scroll animate__animated">
            <h1 class="fw-bold text-white">Resultado de tu Evaluación</h1>
            <h2 class="text-gradient display-4"><?= htmlspecialchars($nivel) ?></h2>
            <p class="fw-bold text-white">Puntaje obtenido: <?= htmlspecialchars($puntaje) ?></p>
            
            <div class="container d-flex justify-content-center align-items-center" style="height: 35vh;">
<div class="chat-container">
 <div class="chat-row ">
                <img src="images\LUDI PNG\ludi-len.png"  alt="20%" width="20%">
      <div class="chat-bubble-big"><strong>Consejo:</strong> <?= htmlspecialchars($consejos) ?></div>
        </div>
    </div>
                            </div>

        </div>
    

  
    <header class="py-3 animate-on-scroll animate__animated">
      <div class="container pb-5">
        <div class="row gx-3 align-items-center">
          <div class="col-xxl-5">
            <div class="text-center text-xxl-start">
              <div class="fs-1 fw-light text-muted">
                <h1 class="display-5 fw-bolder text-gradient">¡Estás libre de riesgo!</h1>
                <div class="fs-3 fw-light text-muted">
                  <p>¡Excelente! Actualmente no presentas señales de riesgo de ludopatía.</p>
                  <p>Aunque estés bien, mantener hábitos saludables es clave para seguir así.</p>
                </div>

                <div class="container d-flex justify-content-center align-items-center" style="height: 33vh;">
                  <div class="chat-container">
                    <div class="chat-row right">
                      <div style="display: flex; flex-direction: column; padding: 10px;">
                        <div class="chat-bubble-big right">
                          🎮 ¡Jugar es divertido, pero con equilibrio es mejor!
                        </div>
                      </div>
                      <img src="images/LUDI PNG/ludi-good.png" alt="Ludi feliz" width="20%">
                    </div>
                  </div>
                </div>

                <ul class="fs-5 text-muted">
                  <li>⏱ Establece horarios para jugar y respétalos.</li>
                  <li>💬 Habla abiertamente sobre tus hábitos con familia o amigos.</li>
                  <li>📚 Infórmate sobre los riesgos de las microtransacciones y cajas de botín.</li>
                  <li>🏃‍♂️ Alterna el juego con otras actividades: ejercicio, lectura, hobbies.</li>
                  <li>🧠 Recuerda: el juego es una parte de tu vida, no toda tu vida.</li>
                </ul>

                <div class="fs-4 fw-light text-muted mt-4">
                  <p>Seguir estos consejos te ayuda a mantenerte en control. Y si notas algún cambio, ¡aquí estamos para apoyarte!</p>
                </div>

                <div class="container d-flex justify-content-center align-items-center" style="height: 33vh;">
                  <div class="chat-container">
                    <div class="chat-row right">
                      <div style="display: flex; flex-direction: column; padding: 10px;">
                        <div class="chat-bubble-big right">
                        ¡Sigue así! Y recuerda, si tienes dudas o curiosidad, siempre puedes aprender más en nuestra sección de <a href="informacion.php" class="text-gradient">información</a>.
                        </div>
                      </div>
                      <img src="images/LUDI PNG/ludi-exited.png" alt="Ludi Emocionado" width="20%">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            </div>
      <a href="evaluacion.php" class="btn btn-primary mt-4">Volver a evaluar</a>

    </div>

  </div>
    </header>

   
  </main>

    <?php include('footer.php'); ?>
    <script src="js\anime.js"></script>
    <script src="js\voice.js"></script>

  </body>
</html>
