<?php
require_once "autoload_mongo.php";

use MongoDB\Client;

$cliente = new Client("mongodb://localhost:27017");
$db = $cliente->StopLuding;
$coleccion = $db->resultados;

// Conteo de niveles
$niveles = [
    "sin señales de ludopatía" => 0,
    "riesgo leve" => 0,
    "riesgo moderado" => 0,
    "riesgo alto" => 0,
    "ludopatía severa" => 0
];

foreach ($coleccion->find() as $doc) {
    $nivel = strtolower(trim($doc['nivel'] ?? ''));
    if (isset($niveles[$nivel])) {
        $niveles[$nivel]++;
    }
}

header('Content-Type: application/json');
echo json_encode(array_values($niveles));
