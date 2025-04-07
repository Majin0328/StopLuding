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
      <div class="fondo-imagen" style="position: absolute; top: 220px; left: 110px; width: 200px; height: 300px;">
  <img src="images/PDVertical.png" alt="Imagen 1" style="width: 100%; height: 100%; object-fit: contain;">
</div>

<!-- Imagen de fondo 2 -->
<div class="fondo-imagen" style="position: absolute; top: 280px; left: 1050px; width: 200px; height: 300px;">
  <img src="images/PBVertical.png" alt="Imagen 2" style="width: 100%; height: 100%; object-fit: contain;">
</div>

    <?php include('navbar.php'); ?>

    <main>
        <div class="container text-center mt-5">
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

            <a href="evaluacion.php" class="btn btn-primary mt-4">Volver a evaluar</a>
        </div>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>
