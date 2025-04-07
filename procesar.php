<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuestas = $_POST['pregunta'];
    $puntaje = 0;

    foreach ($respuestas as $valor) {
        $puntaje += intval($valor);
    }

    // Clasificación según el puntaje
    if ($puntaje <= 16) {
        $nivel = "Sin señales de ludopatía";
        $consejos = "Sigue disfrutando responsablemente tus juegos.";
        $pagina = "sin_riesgo.php";
    } elseif ($puntaje <= 32) {
        $nivel = "Riesgo leve";
        $consejos = "Comienza a establecer límites de tiempo y gasto.";
        $pagina = "riesgo_leve.php";
    } elseif ($puntaje <= 48) {
        $nivel = "Riesgo moderado";
        $consejos = "Evalúa tus hábitos y considera apoyo psicológico.";
        $pagina = "riesgo_moderado.php";
    } elseif ($puntaje <= 64) {
        $nivel = "Riesgo alto";
        $consejos = "Busca ayuda profesional y reduce el uso progresivamente.";
        $pagina = "riesgo_alto.php";
    } else {
        $nivel = "Ludopatía severa";
        $consejos = "Es urgente que busques ayuda profesional inmediata.";
        $pagina = "ludopatia_severa.php";
    }

    // Guardar en archivo JSON
    $resultado = [
        "fecha" => date("Y-m-d H:i:s"),
        "puntaje" => $puntaje,
        "nivel" => $nivel,
        "consejos" => $consejos
    ];

    $archivo = "resultados.json";
    $datos = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];
    $datos[] = $resultado;
    file_put_contents($archivo, json_encode($datos, JSON_PRETTY_PRINT));

    // Redirigir a la página correspondiente con parámetros
    header("Location: $pagina?puntaje=$puntaje&nivel=" . urlencode($nivel) . "&consejos=" . urlencode($consejos));
    exit;
}
?>
