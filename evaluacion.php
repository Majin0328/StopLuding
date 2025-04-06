<?php
// Este bloque se activa si el formulario fue enviado
$resultado = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuestas = $_POST['pregunta'];
    $puntaje = 0;

    foreach ($respuestas as $valor) {
        $puntaje += intval($valor);
    }

    // Clasificación según el puntaje
    if ($puntaje <= 20) {
        $nivel = "Sin señales de ludopatía";
        $consejos = "Sigue disfrutando responsablemente tus juegos.";
    } elseif ($puntaje <= 40) {
        $nivel = "Riesgo leve";
        $consejos = "Comienza a establecer límites de tiempo y gasto.";
    } elseif ($puntaje <= 60) {
        $nivel = "Riesgo moderado";
        $consejos = "Evalúa tus hábitos y considera apoyo psicológico.";
    } elseif ($puntaje <= 80) {
        $nivel = "Riesgo alto";
        $consejos = "Busca ayuda profesional y reduce el uso progresivamente.";
    } else {
        $nivel = "Ludopatía severa";
        $consejos = "Es urgente que busques ayuda profesional inmediata.";
    }

    $resultado = [
        "puntaje" => $puntaje,
        "nivel" => $nivel,
        "consejos" => $consejos
    ];

    // Guardar en archivo JSON
    $datos = json_decode(file_get_contents("resultados.json"), true);
    $datos[] = $resultado;
    file_put_contents("resultados.json", json_encode($datos, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Evaluación - StopLuding</title>
    <link rel="icon" type="image/x-icon" href="images/StopLudingLogoFavIcon.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .form-select,
        .form-check-input {
            background-color: white !important;
            color: black !important;
            border: 1px solid #ccc;
        }

        label {
            color: white;
        }
    </style>
</head>

<body>
    <main>
        <!-- Navbar -->
        <?php include('navbar.php'); ?>

        <header class="py-3">
            <div class="container pb-5">
                <div class="row gx-3 align-items-center">
                    <div class="col-xxl-8 offset-xxl-2">
                        <div class="text-center">
                            <h2 class="fw-bold text-white">Autoevaluación de Ludopatía</h2>
                            <p class="text-white">Responde sinceramente para conocer tu nivel.</p>

                            <form method="POST" action="evaluacion.php" class="text-start">
                                <?php
                                // Preguntas ejemplo (se pueden expandir hasta 20)
                                $preguntas = [
                                    "¿Con qué frecuencia juegas videojuegos?",
                                    "¿Juegas para escapar de emociones negativas?",
                                    "¿Descuidas tus responsabilidades por jugar?",
                                    "¿Te sientes irritable si no juegas?",
                                    "¿Has intentado reducir tu tiempo sin éxito?",
                                    "¿Mientes sobre cuánto juegas?",
                                    "¿Afecta el juego tu sueño?",
                                    "¿Gastaste más dinero del que puedes?",
                                    "¿Prefieres jugar que socializar?",
                                    "¿Te sientes vacío sin jugar?",
                                    "¿Revisas constantemente actualizaciones o eventos del juego?",
                                    "¿Has usado dinero prestado para comprar en juegos?",
                                    "¿Ocultas compras o tiempo de juego a otros?",
                                    "¿Te sientes culpable luego de jugar mucho?",
                                    "¿Te distraes en clase o trabajo pensando en juegos?",
                                    "¿Dejas de comer o dormir por jugar?",
                                    "¿Te sientes obligado a jugar eventos diarios?",
                                    "¿Compras contenido por miedo a perderlo (FOMO)?",
                                    "¿Has tenido problemas familiares por tu juego?",
                                    "¿Crees que podrías dejarlo cuando quieras pero no lo haces?"
                                ];

                                foreach ($preguntas as $index => $texto) {
                                    echo "<div class='mb-3'>";
                                    echo "<label class='fw-semibold'>{$texto}</label><br/>";
                                    echo "<select name='pregunta[]' class='form-select' required>
                                            <option value='0'>Nunca</option>
                                            <option value='1'>Rara vez</option>
                                            <option value='2'>A veces</option>
                                            <option value='3'>Frecuentemente</option>
                                            <option value='4'>Siempre</option>
                                          </select>";
                                    echo "</div>";
                                }
                                ?>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Ver resultados</button>
                                </div>
                            </form>

                            <?php if ($resultado): ?>
                                <div class="alert alert-info mt-4">
                                    <h4>Resultado: <?= $resultado["nivel"] ?></h4>
                                    <p>Puntaje total: <?= $resultado["puntaje"] ?></p>
                                    <p><strong>Consejos:</strong> <?= $resultado["consejos"] ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0" style="color:#FFFFFF;">StopLuding &copy; DERECHOS RESERVADOS 2025</div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>