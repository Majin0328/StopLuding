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

    // Crear la conexion a base de datos
    $cliente = new Client("mongodb://localhost:27017");

    $db = $cliente->StopLuding;
    $coleccion = $db->resultados;

    $resultado = [
        "fecha" => date("Y-m-d H:i:s"),
        "puntaje" => $puntaje,
        "nivel" => $nivel,
        "consejos" => $consejos
    ];

    $insertOneResultado = $coleccion->insertOne($resultado);

    // Guardar en archivo JSON
    $archivo = "resultados.json";
    $datos = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];
    $datos[] = $resultado;
    file_put_contents($archivo, json_encode($datos, JSON_PRETTY_PRINT));

    // Redirigir a la página de resultados
    header("Location: resultado.php?puntaje=$puntaje&nivel=" . urlencode($nivel) . "&consejos=" . urlencode($consejos));
    exit;
}
?>
