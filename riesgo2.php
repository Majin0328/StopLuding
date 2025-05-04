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
      <div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 220px; left: 110px; width: 200px; height: 300px;">
  <img src="images/PDVertical.png" alt="Imagen 1" style="width: 100%; height: 100%; object-fit: contain;">
</div>

<!-- Imagen de fondo 2 -->
<div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 280px; left: 1050px; width: 200px; height: 300px;">
  <img src="images/PBVertical.png" alt="Imagen 2" style="width: 100%; height: 100%; object-fit: contain;">
</div>

  <!-- Imagen de fondo 3 -->
  <div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 700px; left: 180px; width: 200px; height: 300px;">
    <img src="images/PDVertical.png" alt="Imagen 3" style="width: 100%; height: 100%; object-fit: contain;">
  </div>

   <!-- Imagen de fondo 3 -->
   <div class="fondo-imagen animate-on-scroll animate__animated" style="position: absolute; top: 1150px; left: 1000px; width: 200px; height: 300px;">
    <img src="images/PDVertical.png" alt="Imagen 3" style="width: 100%; height: 100%; object-fit: contain;">
  </div>


    <?php include('navbar.php'); ?>

    <main>
        <div class="container text-center mt-5 animate-on-scroll animate__animated">
            <h1 class="fw-bold text-white">Resultado de tu Evaluación</h1>
            <h2 class="text-gradient display-4"><?= htmlspecialchars($nivel) ?></h2>
            <p class="fw-bold text-white">Puntaje obtenido: <?= htmlspecialchars($puntaje) ?></p>
            
            <div class="container d-flex justify-content-center align-items-center" style="height: 35vh;">
<div class="chat-container">
 <div class="chat-row ">
                <img src="images\LUDI PNG\ludi-mario.png"  alt="20%" width="20%">
      <div class="chat-bubble-big"><strong>Consejo:</strong> <?= htmlspecialchars($consejos) ?></div>
        </div>
    </div>
                            </div>

        </div>

        <!-- Bloque 1: Reflexión personal -->
<header class="py-3 animate-on-scroll animate__animated">
  <div class="container pb-5">
    <div class="row gx-3 align-items-center">
      <div class="col-xxl-5">
        <div class="text-center text-xxl-start">
          <div class="fs-1 fw-light text-muted">
            <a class="display-5 fw-bolder nav-link text-gradient d-inline" href="autocuidado.php">Empieza por ti</a>
            <br>
            <div class="fs-3 fw-light text-muted">
              <p>Quizás no sea algo grave, pero tus hábitos están dando señales. Es momento de hacer pequeños cambios antes de que el juego te controle a ti.</p>
            </div>

            <div class="container d-flex justify-content-center align-items-center" style="height: 33vh;">
              <div class="chat-container">
                <div class="chat-row right">
                  <div style="display: flex; flex-direction: column; padding: 10px;">
                    <div class="chat-bubble-big right"> No tienes que dejar de jugar, solo aprender cuándo y por qué lo haces.</div>
                  </div>
                  <img src="images/LUDI PNG/ludi-asertive.png" alt="20%" width="20%">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Bloque 2: Tips prácticos -->
<header class="py-3 animate-on-scroll animate__animated">
  <div class="container pb-5">
    <div class="row gx-5 align-items-center">
      <div class="col-xxl-5">
        <div class="text-center text-xxl-start">
          <div class="fs-1 fw-light text-muted">
            <a class="display-5 fw-bolder nav-link text-gradient d-inline" href="tips.php">Tips útiles</a>
            <br>
            <div class="fs-3 fw-light text-muted">
              <p>Prueba esto: pon un temporizador antes de jugar, evita juegos con muchas compras internas y recuerda que no tienes que ganar siempre.</p>
            </div>

            <div class="container d-flex justify-content-center align-items-center" style="height: 33vh;">
              <div class="chat-container">
                <div class="chat-row">
                  <img src="images/LUDI PNG/ludi-good.png" alt="20%" width="20%">
                  <div class="chat-bubble-big"> Un descanso de 5 minutos puede salvarte de horas perdidas y gastos innecesarios.</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Bloque 3: Replantear el juego -->
<header class="py-3 animate-on-scroll animate__animated">
  <div class="container pb-5">
    <div class="row gx-5 align-items-center">
      <div class="col-xxl-5">
        <div class="text-center text-xxl-start">
          <div class="fs-1 fw-light text-muted">
            <a class="display-5 fw-bolder nav-link text-gradient d-inline" href="informacion.php">¿Qué hay detrás del juego?</a>
            <br>
            <div class="fs-3 fw-light text-muted">
              <p>Los juegos con lootboxes o skins suelen estar diseñados para enganchar. Entender cómo funcionan es el primer paso para evitar caer en su trampa.</p>
            </div>

            <div class="container d-flex justify-content-center align-items-center" style="height: 33vh;">
              <div class="chat-container">
                <div class="chat-row right">
                  <div style="display: flex; flex-direction: column; padding: 10px;">
                    <div class="chat-bubble-big right"> No todo lo que brilla en el juego vale tu tiempo o tu dinero.</div>
                  </div>
                  <img src="images/LUDI PNG/ludi-pizzatower.png" alt="20%" width="20%">
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
