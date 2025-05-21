<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Halaman Pertemuan - PWEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #ffffff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }
        .list-group-item {
            transition: 0.3s;
        }
        .list-group-item:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="bi bi-journal-code"></i> Daftar Halaman Pertemuan - PWEB</h1>
        <div class="list-group">
            <a href="{{ url('/bootstrap1') }}" class="list-group-item list-group-item-action"><i class="bi bi-box"></i> Bootstrap 1</a>
            <a href="{{ url('/js2') }}" class="list-group-item list-group-item-action"><i class="bi bi-code-slash"></i> JavaScript 2</a>
            <a href="{{ url('/contact') }}" class="list-group-item list-group-item-action"><i class="bi bi-envelope"></i> Contact ETS</a>
            <a href="{{ url('/index') }}" class="list-group-item list-group-item-action"><i class="bi bi-house-door"></i> Index ETS</a>
            <a href="{{ url('/Linktree') }}" class="list-group-item list-group-item-action"><i class="bi bi-diagram-3"></i> Linktree</a>
            <a href="{{ url('/Pertemuan4') }}" class="list-group-item list-group-item-action"><i class="bi bi-calendar-week"></i> Pertemuan 4</a>
            <a href="{{ url('/services') }}" class="list-group-item list-group-item-action"><i class="bi bi-gear-wide-connected"></i> Service ETS</a>
            <a href="{{ url('/Tugas1') }}" class="list-group-item list-group-item-action"><i class="bi bi-pencil-square"></i> Tugas 1</a>
            <a href="{{ url('/web') }}" class="list-group-item list-group-item-action"><i class="bi bi-globe2"></i> Index Danantara</a>
            <a href="{{ url('/welcome') }}" class="list-group-item list-group-item-action"><i class="bi bi-emoji-smile"></i> Welcome</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
