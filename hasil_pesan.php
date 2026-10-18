<?php
// Memeriksa apakah data nama, kelas, dan pesan sudah dikirim melalui POST
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    // Jika ada data yang belum tersedia, arahkan kembali ke halaman formulir.
    header("Location: form_pesan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
    
    <!-- Mengatur tampilan website -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #561C24;
            margin: 0;
            padding: 50px 20px;
        }

        .card {
            background-color: white;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
        }

        h2 {
            margin-top: 0;
            color: #0a0a0a;
        }

        .line {
            padding: 5px 16px;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        .button {
            display: inline-block;
            background-color: #561C24;
            color: #fcfcfd;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #351116;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Pesan Berhasil Dikirim</h2>
        <p>Terima kasih, <b><?= $_POST["nama"] ?></b>!</p>

        <!-- Menampilkan nama, kelas, pesan & kesan formulir melalui POST -->
        <div class="line"><b>Nama:</b> <?= $_POST["nama"] ?></div>
        <div class="line"><b>Kelas:</b> <?= $_POST["kelas"] ?></div>
        <div class="line"><b>Pesan & Kesan:</b> <?= $_POST["pesan"] ?></div>

        <!-- Tautan ke halaman utama -->
        <a href="index.php" class="button">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>