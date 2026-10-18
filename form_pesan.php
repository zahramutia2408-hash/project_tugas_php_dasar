<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pesan Mahasiswa</title>

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
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
        }

        h2 {
            margin-top: 0;
            color: #0e0000;
        }

        label {
            display: block;
            font-weight: bold;
            color: #050000;
            margin-bottom: 6px;
        }

        input, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #080000;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin-bottom: 18px;
        }

        input:focus, textarea:focus {
            outline: 2px solid #C7B7A3;
            border-color: #C7B7A3;
        }

        .button {
            display: inline-block;
            background-color: #561C24;
            color: #f2eff7;
            font-size: 14px;
            text-decoration: none;
            padding: 10px 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #351116;
        }

    </style>
</head>
<body>
    <div class="card">
        <h2>Formulir Pesan Mahasiswa</h2>

        <!-- Mengirim data formulir menggunakan POST -->
        <form action="hasil_pesan.php" method="post">

            <!-- Kolom untuk memasukkan nama, kelas, pesan & kesan -->
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" required>
            <label for="pesan">Pesan & Kesan</label>
            <textarea id="pesan" name="pesan" rows="6" required></textarea>

            <button type="submit" name="tombol_kirim" class="button">Kirim</button>

            <a href="index.php" class="button">Kembali</a>
        </form>
    </div>
</body>
</html>