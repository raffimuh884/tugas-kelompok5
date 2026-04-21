<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Data Historis Mahasiswa</title>
    <link rel="stylesheet" href="public/graindashboard/css/graindashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .chart-container {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(6, 6, 6, 0.58);
            width: 100%;
            max-width: 900px;
            height: 500px;
        }
        h2 {
            color: black;
        }
    </style>
</head>
<body>
@include('sidebar')
    <div class="content">
        <header>
            <h2>Grafik Jumlah Mahasiswa dan Persentase Perubahan</h2>
        </header>
        <div class="chart-container">
            <canvas id="studentChart"></canvas>
        </div>
    </div>
    <script>
        const dataHistoris = [
            { tahun: 2019, jumlah_mahasiswa: 362, persentase_perubahan: null },
            { tahun: 2020, jumlah_mahasiswa: 423, persentase_perubahan: 16.85 },
            { tahun: 2021, jumlah_mahasiswa: 337, persentase_perubahan: -20.33 },
            { tahun: 2022, jumlah_mahasiswa: 359, persentase_perubahan: 6.53 },
            { tahun: 2023, jumlah_mahasiswa: 279, persentase_perubahan: -22.28 },
            { tahun: 2024, jumlah_mahasiswa: 252, persentase_perubahan: -9.68 }
        ];
        
        const labels = dataHistoris.map(item => item.tahun);
        const jumlahMahasiswa = dataHistoris.map(item => item.jumlah_mahasiswa);
        const persentasePerubahan = dataHistoris.map(item => item.persentase_perubahan);
        
        const ctx = document.getElementById('studentChart').getContext('2d');
        Chart.register(ChartDataLabels);
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Jumlah Mahasiswa',
                        data: jumlahMahasiswa,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        yAxisID: 'y',
                        datalabels: {
                            anchor: 'end',
                            align: 'top',
                            color: 'black',
                            formatter: (value) => value
                        }
                    },
                    {
                        label: 'Persentase Perubahan (%)',
                        data: persentasePerubahan,
                        type: 'line',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true,
                        yAxisID: 'y1',
                        datalabels: {
                            anchor: 'end',
                            align: 'bottom',
                            color: 'black',
                            formatter: (value) => value ? value + '%' : ''
                        }
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Mahasiswa'
                        }
                    },
                    y1: {
                        title: {
                            display: true,
                            text: 'Persentase Perubahan (%)'
                        },
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    },
                    datalabels: {
                        display: true
                    }
                }
            }
        });
    </script>
</body>
</html>