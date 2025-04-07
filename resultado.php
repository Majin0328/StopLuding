<?php
$puntaje = $_GET['puntaje'] ?? 'No disponible';
$nivel = $_GET['nivel'] ?? 'Desconocido';
$consejos = $_GET['consejos'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - StopLuding</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <?php include('navbar.php'); ?>

    <main>
        <div class="container text-center mt-5">
            <h1 class="fw-bold">Resultado de tu Evaluación</h1>
            <h2 class="text-gradient display-4"><?= htmlspecialchars($nivel) ?></h2>
            <p class="fs-4">Puntaje obtenido: <?= htmlspecialchars($puntaje) ?></p>
            <div class="alert alert-info">
                <strong>Consejo:</strong> <?= htmlspecialchars($consejos) ?>
            </div>

            <a href="evaluacion.php" class="btn btn-primary mt-4">Volver a evaluar</a>
        </div>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>
