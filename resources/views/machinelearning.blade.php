<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi Mahasiswa - Random Forest</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #333;
            color: white;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            position: fixed;
            width: 200px;
            height: 100%;
            background-color: #222;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
        }

        .content {
            flex-grow: 1;
            margin-left: 220px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: black;
        }

        .chart-container {
            width: 100%;
            max-width: 900px;
            height: 500px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        canvas {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    @include('sidebar')

    <div class="content">
        <h2>Prediksi Mahasiswa - Random Forest</h2>
        <div class="chart-container">
            <canvas id="mahasiswaChart"></canvas>
        </div>
    </div>
    
    <script>
    const ctx = document.getElementById('mahasiswaChart').getContext('2d');
    const dataTahun = [2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026];
    const dataRandomForest = [362, 423, 337, 359, 279, 252, 265, 265];

    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataTahun,
            datasets: [
                {
                    label: 'Jumlah Mahasiswa (Data Aktual)',
                    data: dataRandomForest.map((val, i) => (i < 6 ? val : null)),
                    borderColor: 'blue',
                    backgroundColor: 'rgba(0, 0, 255, 0.1)',
                    pointBackgroundColor: 'blue',
                    tension: 0.3
                },
                {
                    label: 'Prediksi (2025-2026)',
                    data: dataRandomForest.map((val, i) => (i >= 5 ? val : null)),
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.1)',
                    pointBackgroundColor: 'red',
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: true } },
            scales: {
                x: { title: { display: true, text: 'Tahun' } },
                y: { title: { display: true, text: 'Jumlah Mahasiswa' }, beginAtZero: false }
            }
        }
    });
    </script>
</body>
</html>
