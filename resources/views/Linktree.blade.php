<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kemah Rohani XXVI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #2c003e, #000000);
            background-attachment: fixed;
            color: white;
            text-align: center;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            max-width: 400px;
            margin: auto;
            padding: 40px 20px;
            border-radius: 20px;
            min-height: 100vh;
        }

        .logo img {
            width: 100px;
            margin-bottom: 20px;
            border-radius: 50%;
            border: 2px solid white;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .event-image img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 12px;
            margin-bottom: 30px;
        }

        .countdown span {
            display: block;
            font-size: 20px;
            font-weight: bold;
        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 10px;
            margin-bottom: 10px;
        }

        .link-button {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            background-color: rgba(144, 133, 133, 0.1);
            color: white;
            padding: 12px 16px;
            margin: 8px 0;
            border-radius: 30px;
            text-decoration: none;
            transition: 0.3s;
        }

        .link-button:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .link-button i {
            font-size: 20px;
            width: 24px;
            text-align: center;
        }

        .icon-orange i {
            color: #dd6f1b;
        }

        .icon-yellow i {
            color: #debc26;
        }

        .icon-blue i {
            color: rgb(38, 145, 239);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="linktree2.png" alt="Logo">
        </div>
        <h1>KEMAH ROHANI XXVI</h1>
        <p class="subtitle">Don't miss out!!!</p>

        <div class="event-image">
            <img src="linktree1" alt="Foto Peserta">
        </div>

        <div class="countdown">
            <div><span>00</span>Hari</div>
            <div><span>00</span>Jam</div>
            <div><span>00</span>Menit</div>
            <div><span>00</span>Detik</div>
        </div>

        <div class="section-title">Pre-Event</div>
        <a href="https://drive.google.com/drive/folders/1AlgB37S_hzWs7MNwLQ5vsBW1aQK4rPGr" target="_blank" class="link-button icon-orange"><i class="fa-solid fa-book"></i> Guidebook</a>
        <a href="https://drive.google.com/drive/folders/1BB4N-1XF4UXRAi0RWtQQWGr3AQ9Mc449" target="_blank" class="link-button icon-yellow"><i class="fa-solid fa-tv"></i> PPT & Rekord TW</a>

        <div class="section-title">Kelompok KR XXVI</div>
        <a href="https://docs.google.com/spreadsheets/d/18l24fLoyVYGyzDZT2KK3RJhgrxx9Pm0YE1H70Z4O94Y/edit?gid=0#gid=0" target="_blank" class="link-button icon-blue"><i class="fa-solid fa-user"></i> Kelompok KR</a>

        <div class="section-title">Akomodasi & Transportasi</div>
        <a href="https://docs.google.com/spreadsheets/d/1z7b9ggw8t1XsNBYseuTlSM1CUOWKzLH1P2vIh8uuMQQ/edit?gid=0#gid=0" target="_blank" class="link-button icon-orange"><i class="fa-solid fa-tent"></i> Perlengkapan Tenda</a>
        <a href="https://docs.google.com/spreadsheets/d/1AZI7ErWAJCc_oGY-xHtENHYIWoTNvW3KzC94pJF8srI/edit?gid=350593646#gid=350593646" target="_blank" class="link-button icon-blue"><i class="fa-solid fa-bus"></i> Pembagian Jisang</a>

        <div class="section-title">Contact Person</div>
        <a href="https://www.instagram.com/kemahrohani.its/" target="_blank" class="link-button" style="background-color: #e84393;"><i class="fab fa-instagram"></i> Instagram</a>
    </div>

    <script>
        const endTime = new Date().getTime() + 24 * 10 * 60 * 1000;
        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.querySelector(".countdown").innerHTML = "<div>Waktu Habis</div>";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector(".countdown").innerHTML = `
                <div><span>${String(days).padStart(2, '0')}</span>Hari</div>
                <div><span>${String(hours).padStart(2, '0')}</span>Jam</div>
                <div><span>${String(minutes).padStart(2, '0')}</span>Menit</div>
                <div><span>${String(seconds).padStart(2, '0')}</span>Detik</div>
            `;
        }, 1000);
    </script>
</body>
</html>
