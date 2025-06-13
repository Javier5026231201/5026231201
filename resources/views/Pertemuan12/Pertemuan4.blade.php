<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ajuan Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4adcd875fe.js" crossorigin="anonymous"></script>
    <meta http-equiv="refresh" content="15">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            position: fixed;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .sidebar a.text-danger {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: calc(100% - 40px);
            text-align: center;
            background-color: #34495e;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar i {
            color: black !important;
        }

        .rounded-circle {
            float: left;
        }

        .main-content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
        }

        .status-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .status-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .status-item p {
            margin: 0;
            font-weight: normal;
            color: black;
        }

        .approved {
            color: gray;
        }

        .pending {
            color: #f39c12;
        }

        .completed {
            color: #2ecc71;
        }

        .card {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <br><br><br><br>
        <div class="text-center mb-3">
            <img src="image/Frame 40792-3.png" class="rounded-circle" alt="Admin" width="60px" height="60px">
            <h5 class="mt-2">Admin</h5>
            <p>admin@mail.com</p>
        </div>
        <a href="#">Helperlog</a>
        <a href="#">Helperfind</a>
        <a href="#" class="text-danger">Log Out</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h3>Detail Ajuan Pesanan</h3>
        <div class="card p-4 shadow">
            <h5 class="text-center">Proses Pengajuan Pesanan</h5>

            <!-- Status Icons -->
            <div class="status-icons d-flex justify-content-around text-center">
                <div class="status-item">
                    <i class="fas fa-check-circle completed" style="font-size: 24px;"></i>
                    <p>Ajuan Dibuat</p>
                </div>
                <div class="status-item">
                    <i class="fas fa-clock pending" style="font-size: 24px;"></i>
                    <p>Proses Review</p>
                </div>
                <div class="status-item">
                    <i class="fas fa-check-circle completed" style="color: rgb(71, 69, 69); font-size: 24px;"></i>
                    <p>Disetujui</p>
                </div>
            </div>

            <table class="table">
                <tr><td><b>ID Kontrak</b></td><td>: 12762837468234</td></tr>
                <tr><td><b>Tanggal Pengajuan</b></td><td>: 5 Juli 2024 - 12:57 WIB</td></tr>
                <tr><td><b>Nama Pengaju</b></td><td>: Bayu Liano</td></tr>
                <tr><td><b>Nama PRT</b></td><td>: Intan Permata</td></tr>
                <tr><td><b>Pekerjaan</b></td><td>: Baby Sitter</td></tr>
                <tr><td><b>Lama Kontrak</b></td><td>: 12 Bulan</td></tr>
                <tr><td><b>Nominal</b></td><td>: Rp 2.500.000,-</td></tr>
            </table>

            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-success">Setuju</button>
                <button class="btn btn-danger">Tolak</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
