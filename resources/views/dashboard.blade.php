<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            height: 100vh;
            background: #121212;
            color: #e0e0e0;
        }
        .content {
            flex-grow: 1; /* Agar konten bisa di-scroll jika melebihi layar */
            padding: 40px; /* Tambahkan padding untuk ruang lebih */
            overflow-y: auto; /* Tambahkan scroll jika konten melebihi tinggi */
            display: flex;
            flex-direction: column; /* Mengatur konten agar ditampilkan secara vertikal */
            justify-content: center; /* Mengatur konten agar berada di tengah secara vertikal */
            align-items: center; /* Mengatur konten agar berada di tengah secara horizontal */
            text-align: center; /* Mengatur teks agar berada di tengah */
        }
        h2 {
            font-size: 3rem; /* Ukuran font lebih besar untuk judul */
            margin-bottom: 20px; /* Jarak bawah untuk judul */
        }
        p {
            font-size: 1.5rem; /* Ukuran font lebih besar untuk paragraf */
            margin: 0; /* Menghilangkan margin default */
        }
    </style>
</head>
<body>
    
@include('sidebar')

    <div class="content p-4">
        <h2>DASHBOARD</h2>
        <p>Aktivitas IT</p>
    </div>
</body>
</html>