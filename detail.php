<?php
// Memeriksa apakah seluruh parameter GET yang dibutuhkan tersedia.
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"])
) {
    // Jika ada parameter yang tidak tersedia, arahkan kembali ke index.php.
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>

    <!-- Mengatur tampilan halaman website -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #561C24;
            margin: 0;
            padding: 50px 20px;
        }

        .card {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
        }

        h2 {
            margin-top: 0;
            color: #111111;
        }

        .line {
            background-color: #C7B7A3;
            padding: 14px 16px;
            margin-bottom: 12px;
            border-radius: 4px;
        }

        .button {
            display: inline-block;
            background-color: #561C24;
            color: #f5f0ff;
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
        <h2>Detail Mahasiswa</h2>
        
        <!-- Menampilkan nim, nama, jurusan, email, nilai, grade, status melalui GET -->
        <div class="line"><b>NIM:</b> <?= $_GET["nim"] ?></div>
        <div class="line"><b>Nama:</b> <?= $_GET["nama"] ?></div>
        <div class="line"><b>Jurusan:</b> <?= $_GET["jurusan"] ?></div>
        <div class="line"><b>Email:</b> <?= $_GET["email"] ?></div>
        <div class="line"><b>Nilai:</b> <?= $_GET["nilai"] ?></div>
        <div class="line"><b>Grade:</b> <?= $_GET["grade"] ?></div>
        <div class="line"><b>Status:</b> <?= $_GET["status"] ?></div>

        <a href="index.php" class="button">Kembali</a>
    </div>
</body>
</html>