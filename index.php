<?php
// Membuat array associative berisi data mahasiswa
$mahasiswa = [
    [
        "nim" => "2500682",
        "nama" => "Dian Sastrowardoyo",
        "jurusan" => "Manajemen Keuangan",
        "email" => "diancantik23@email.com",
        "nilai" => 83
    ],
    [
        "nim" => "2500683",
        "nama" => "Maudy Ayunda",
        "jurusan" => "Hubungan Internasional",
        "email" => "maudygokiel24@gmail.com",
        "nilai" => 68
    ],
    [
        "nim" => "2500684",
        "nama" => "Emma Watson",
        "jurusan" => "Sastra Inggris",
        "email" => "emmamanis44@gmail.com",
        "nilai" => 75
    ],
    [
        "nim" => "2500685",
        "nama" => "Raditya Dika",
        "jurusan" => "Ilmu Politik",
        "email" => "raditimut11@gmail.com",
        "nilai" => 57
    ],
    [
        "nim" => "2500686",
        "nama" => "Iqbaal Ramadhan",
        "jurusan" => "Media Komunikasi",
        "email" => "iqbalwow22@gmail.com",
        "nilai" => 100
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

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
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .header h2 {
            margin: 0 0 8px 0;
            color: #080001;
        }

        .header p {
            margin: 0;
            color: #050505;
        }

        .button {
            display: inline-block;
            background-color: #561C24;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
            text-align: center;
        }

        .button:hover {
            background-color: #351116;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #561C24;
            background-color: white;
            color: #050505;
            text-align: left;
        }

        th, td {
            border: 2px solid #561C24;
            padding: 10px 8px;
            text-align: center;
        }

        th {
        background-color: #C7B7A3;
        color: #050505;
        }

        .lulus, 
        .tidak-lulus {
        display: inline-block;
        min-width: 85px;
        padding: 10px 12px;
        border-radius: 10px;
        text-align: center;
        font-weight: bold;
        white-space: nowrap;
        box-sizing: border-box;
         }

        .lulus {
        background-color: #d8f3dc;
        color: #16852a;
        border: 1px solid #16852a;
         }

        .tidak-lulus {
        background-color: #f8d7da;
        color: #c82333;
        border: 1px solid #c82333;
         }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="button">Isi Form Pesan</a>
        </div>

        <!-- Membuat tabel untuk menampilkan seluruh data mahasiswa -->
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <!-- Perulangan data mahasiswa untuk menampilkan setiap baris tabel -->
                <?php foreach($mahasiswa as $data): ?>

                    <?php
                    // Menentukan grade berdasarkan nilai 
                    if ($data["nilai"] >= 80) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    // Menentukan status kelulusan berdasarkan nilai
                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                        $css_status = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $css_status = "tidak-lulus";
                    }

                    // Menyusun URL
                    $url = "detail.php?nim=" . $data["nim"]
                         . "&nama=" . $data["nama"]
                         . "&jurusan=" . $data["jurusan"]
                         . "&email=" . $data["email"]
                         . "&nilai=" . $data["nilai"]
                         . "&grade=" . $grade
                         . "&status=" . $status;
                    ?>

                    <!-- Menampilkan data satu mahasiswa dalam satu baris tabel -->
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td><span class="<?= $css_status ?>"><?= $status ?></span></td>

                        <td><a href="<?= $url ?>" class="button">Lihat Detail</a></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>