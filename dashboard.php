<?php
require_once "autoload_mongo.php";

use MongoDB\Client;

$cliente = new Client("mongodb://localhost:27017");
$db = $cliente->StopLuding;
$coleccion = $db->resultados;

// Buscamos todos los registros y ordenamos por fecha descendiente
$registros = $coleccion->find([], [
    'sort' => ['fecha' => -1],
]);

// Conteo de niveles 1 a 5
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

include("navbar.php");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard de Puntajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-light">

    <div class="container my-5">
        <h2 class="text-center mb-4">📊 Dashboard de Puntajes</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle text-center shadow-sm">
                <thead class="table-primary">
                    <tr>
                        <th>Fecha</th>
                        <th>Puntaje</th>
                        <th>Nivel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registros as $doc): ?>
                        <tr>
                            <td><?= htmlspecialchars($doc['fecha']) ?></td>
                            <td><?= htmlspecialchars($doc['puntaje']) ?></td>
                            <td><?= htmlspecialchars($doc['nivel']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="card mt-5 shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-center">Distribución de Niveles</h5>
                <canvas id="nivelChart" height="100"></canvas>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('nivelChart').getContext('2d');
        const nivelChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Nivel 1', 'Nivel 2', 'Nivel 3', 'Nivel 4', 'Nivel 5'],
                datasets: [{
                    label: 'Cantidad por nivel',
                    data: <?= json_encode(array_values($niveles)) ?>,
                    backgroundColor: 'rgba(13, 110, 253, 0.5)',
                    borderColor: 'rgba(13, 110, 253, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: (ctx) => `Cantidad: ${ctx.raw}`
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        stepSize: 1,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>