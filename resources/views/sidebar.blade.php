<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Reset Margin dan Padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            display: flex;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed; /* Make sidebar fixed */
            width: 250px;
            height: 100%; /* Full height */
            background: #2c3e50;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align items to the start */
            box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.3);
            overflow-y: auto; /* Enable scrolling if content overflows */
        }

        /* Logo */
        .logo {
            width: 120px;
            margin-bottom: 20px;
        }

        /* List Styling */
        .list-unstyled {
            width: 100%;
            list-style: none;
        }

        /* Heading pada Sidebar */
        .sidebar-heading {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px 15px;
            text-align: left;
            color: #bdc3c7;
        }

        /* Garis Pemisah */
        .divider {
            width: 100%;
            height: 1px;
            background: #ffffff;
            margin: 10px 0;
        }

        /* Link Styling */
        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            text-decoration: none;
            color: white;
            font-size: 16px;
            transition: background 0.3s ease-in-out;
            border-radius: 5px;
            width: 100%; /* Make links take full width */
        }

        /* Hover Effect */
        .sidebar a:hover {
            background: #1a252f;
        }

        /* Ikon di Sidebar */
        .sidebar i {
            width: 20px;
            text-align: center;
            margin-right: 10px;
        }

        /* Konten Dashboard */
        .content {
            flex: 1;
            margin-left: 250px; /* Add margin to the left to avoid overlap with sidebar */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Submenu Styling */
        .submenu {
            display: none; /* Initially hidden */
            padding-left: 20px;
            width: 100%; /* Make submenu take full width */
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .sidebar a {
                font-size: 14px;
            }
            .content {
                margin-left: 200px; /* Adjust margin for smaller sidebar */
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">

    <ul class="list-unstyled">
        <li class="sidebar-heading">Dashboard</li>
        <div class="divider"></div>
        <li><a href="{{ route('dashboard') }}"><i class="fas fa-chart-bar"></i> Dashboard</a></li>

        <li class="sidebar-heading">Data</li>
        <div class="divider"></div>
        <li><a href="{{ route('trendmahasiswa') }}"><i class="fas fa-chart-line"></i> Jumlah Tiket Perbulan</a></li>
        <li><a href="{{ route('distribusimahasiswa') }}"><i class="fas fa-chart-pie"></i> Jumlah Tiker Per bulan - Kategori</a></li>
        <li><a href="{{ route('jeniskelamin') }}"><i class="fas fa-venus-mars"></i> Jumlah Tiket Per bulan - Departement</a></li>
        <li><a href="{{ route('machinelearning') }}"><i class="fas fa-robot"></i> Jumlah Tiket Perhari</a></li>
        <li>
            <a href="#" onclick="toggleSubmenu('demografi-submenu')">
                <i class="fas fa-globe"></i> Demografi
            </a>
            <ul class="submenu" id="demografi-submenu">
                <li><a href="{{ route('peta_mahasiswa') }}"><i class="fas fa-map"></i> Peta Provinsi</a></li>
                <li><a href="{{ route('peta_kab') }}"><i class="fas fa-map-marker-alt"></i> Peta Kab</a></li>
            </ul>
        </li>
    </ul>
</div>
<script>
    function toggleSubmenu(submenuId) {
        const submenu = document.getElementById(submenuId);
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    }
</script>

</body>
</html>