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
        const labels = ['Sin riesgo', 'Riesgo Leve', 'Riesgo Moderado', 'Riesgo Alto', 'Riesgo Severo'];
        const backgroundColors = [
            'rgba(108, 117, 125, 0.6)',
            'rgba(13, 202, 240, 0.6)',
            'rgba(255, 193, 7, 0.6)',
            'rgba(255, 87, 34, 0.6)',
            'rgba(220, 53, 69, 0.6)'
        ];
        const borderColors = [
            'rgba(108, 117, 125, 1)',
            'rgba(13, 202, 240, 1)',
            'rgba(255, 193, 7, 1)',
            'rgba(255, 87, 34, 1)',
            'rgba(220, 53, 69, 1)'
        ];

        const nivelChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Cantidad por nivel',
                    data: [],
                    backgroundColor: backgroundColors,
                    borderColor: borderColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });

        // Función para cargar los datos vía AJAX
        function actualizarGrafica() {
            fetch('api_data.php')
                .then(response => response.json())
                .then(data => {
                    nivelChart.data.datasets[0].data = data;
                    nivelChart.update();
                })
                .catch(error => console.error('Error al cargar datos:', error));
        }

        // Llamar al cargar y cada 10 segundos
        actualizarGrafica();
        setInterval(actualizarGrafica, 10000);
    </script>

</body>

</html>