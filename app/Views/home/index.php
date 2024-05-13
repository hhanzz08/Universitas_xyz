<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-color: #000000; 
    font-family: Arial, sans-serif;
    text-align: center;
    padding-top: 50px;
    margin: 0 auto; /* Mengatur margin atas dan bawah menjadi 0, dan secara otomatis mengatur margin kiri dan kanan agar konten berada di tengah */
    width: 50%; /* Menentukan lebar konten agar tidak terlalu lebar */
        }

        h1 {
            color: #f709f8;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
        }

        .btn-dosen {
            background-color: #4CAF50;
        }

        .btn-petugas {
            background-color: #008CBA;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Sistem Informasi Kampus</h1>
    <div class="container">
        <a href="<?= base_url('dosen') ?>" class="btn btn-dosen">Akses Dosen</a>
        <a href="<?= base_url('petugas') ?>" class="btn btn-petugas">Akses Petugas</a>
    </div>
</body>
</html>
