<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .btn-batal {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #f00;
            color: #000;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Edit Dosen</h1>
    <?php if (session()->has('errors')) : ?>
        <div style="color: red;">
            <?php foreach (session('errors') as $error) : ?>
                <?= $error ?><br>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('success')) : ?>
        <div style="color: green;">
            <?= session('success') ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('error')) : ?>
        <div style="color: red;">
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <form action="<?= base_url('dosen/update/' . $dosen['id_dosen']) ?>" method="post"> <!-- Menambahkan ID dosen ke URL -->
        <label for="nama_dosen">Nama:</label><br>
        <input type="text" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>"><br>
        <label for="bidang">Bidang Pekerjaan:</label><br>
        <select id="bidang" name="bidang">
            <option value="">Harap Pilih</option>
            <option value="Pemrograman" <?= $dosen['bidang'] === 'Pemrograman' ? 'selected' : '' ?>>Pemrograman</option>
            <option value="Statistika" <?= $dosen['bidang'] === 'Statistika' ? 'selected' : '' ?>>Statistika</option>
            <option value="Fisika" <?= $dosen['bidang'] === 'Fisika' ? 'selected' : '' ?>>Fisika</option>
            <!-- Tambahkan opsi lainnya sesuai dengan daftar mata kuliah -->
        </select><br>
        <label for="email_dosen">Email:</label><br>
        <input type="text" id="email_dosen" name="email_dosen" value="<?= $dosen['email_dosen'] ?>"><br><br>
        <input type="submit" value="Simpan">
        <a href="<?= base_url('/dosen') ?>" class="btn-batal">Batal</a>
    </form>
</body>
</html>
