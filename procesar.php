<?php

require_once "autoload_mongo.php";

use MongoDB\Client;

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
        $pagina = "riesgo1.php";
    } elseif ($puntaje <= 32) {
        $nivel = "Riesgo leve";
        $consejos = "Comienza a establecer límites de tiempo y gasto.";
        $pagina = "riesgo2.php";
    } elseif ($puntaje <= 48) {
        $nivel = "Riesgo moderado";
        $consejos = "Evalúa tus hábitos y considera apoyo psicológico.";
        $pagina = "riesgo3.php";
    } elseif ($puntaje <= 64) {
        $nivel = "Riesgo alto";
        $consejos = "Busca ayuda profesional y reduce el uso progresivamente.";
        $pagina = "riesgo4.php";
    } else {
        $nivel = "Ludopatía severa";
        $consejos = "Es urgente que busques ayuda profesional inmediata.";
        $pagina = "riesgo5.php";
    }

    $resultado = [
        "fecha" => date("Y-m-d H:i:s"),
        "puntaje" => $puntaje,
        "nivel" => $nivel,
        "consejos" => $consejos
    ];

    // Crear la conexion con el cliente

    $cliente = new Client("mongodb://localhost27017");
    $db = $cliente->StopLuding;
    $coleccion = $db->resultados;

    $resultado_insert = $coleccion->insertOne($resultado);

    // Redirigir a la página correspondiente con parámetros
    header("Location: $pagina?puntaje=$puntaje&nivel=" . urlencode($nivel) . "&consejos=" . urlencode($consejos));
    exit;
}
?>
