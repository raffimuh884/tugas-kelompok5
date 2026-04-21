<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <style>
        body {
            margin: 0;
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        canvas {
            width: 90% !important;
            height: 90% !important;
        }
    </style>
</head>
<body>
    @include('sidebar')
    <div class="content">
        <canvas id="studentChart"></canvas>
    </div>
    <script>
        const jsonData = [
            {"tahun_target": 2019, "Manajemen": 247, "Akutansi S1": 78, "Akutansi D3": 11, "Manajemen Pemasaran": 13, "Keuangan dan Perbankan": 13},
            {"tahun_target": 2020, "Manajemen": 317, "Akutansi S1": 75, "Akutansi D3": 7, "Manajemen Pemasaran": 12, "Keuangan dan Perbankan": 12},
            {"tahun_target": 2021, "Manajemen": 240, "Akutansi S1": 72, "Akutansi D3": 3, "Manajemen Pemasaran": 11, "Keuangan dan Perbankan": 11},
            {"tahun_target": 2022, "Manajemen": 262, "Akutansi S1": 54, "Akutansi D3": 13, "Manajemen Pemasaran": 17, "Keuangan dan Perbankan": 13},
            {"tahun_target": 2023, "Manajemen": 206, "Akutansi S1": 42, "Akutansi D3": 9, "Manajemen Pemasaran": 16, "Keuangan dan Perbankan": 6},
            {"tahun_target": 2024, "Manajemen": 165, "Akutansi S1": 49, "Akutansi D3": 6, "Manajemen Pemasaran": 26, "Keuangan dan Perbankan": 6}
        ];

        const totalMahasiswa = jsonData.map(data => 
            data.Manajemen + data["Akutansi S1"] + data["Akutansi D3"] + data["Manajemen Pemasaran"] + data["Keuangan dan Perbankan"]
        );

        const labels = jsonData.map((data, index) => `${data.tahun_target} → ${totalMahasiswa[index]}`);

        const datasets = [
            { label: "Manajemen", data: jsonData.map(data => data.Manajemen), backgroundColor: "rgba(255, 99, 132, 0.5)" },
            { label: "Akutansi S1", data: jsonData.map(data => data["Akutansi S1"]), backgroundColor: "rgba(54, 162, 235, 0.5)" },
            { label: "Akutansi D3", data: jsonData.map(data => data["Akutansi D3"]), backgroundColor: "rgba(255, 206, 86, 0.5)" },
            { label: "Manajemen Pemasaran", data: jsonData.map(data => data["Manajemen Pemasaran"]), backgroundColor: "rgba(75, 192, 192, 0.5)" },
            { label: "Keuangan dan Perbankan", data: jsonData.map(data => data["Keuangan dan Perbankan"]), backgroundColor: "rgba(153, 102, 255, 0.5)" }
        ];

        const ctx = document.getElementById('studentChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: datasets
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' },
                    title: { 
                        display: true, 
                        text: 'DISTRIBUSI & TREND PERTAHUN', 
                        font: { size: 24, weight: 'bold' } 
                    },
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: (value) => value,
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>
</body>
</html>
