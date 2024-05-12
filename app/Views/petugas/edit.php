<!-- views/dosen/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Petugas</title>
</head>
<body>
    <h1>Edit Data Petugas</h1>
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

    <form action="<?= base_url('petugas/update/' . $petugas['id']) ?>" method="post"> <!-- Menambahkan ID dosen ke URL -->
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $petugas['nama'] ?>"><br>
        <label for="tugas">Tugas:</label><br>
        <input type="text" id="tugas" name="tugas" value="<?= $petugas['tugas'] ?>"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?= $petugas['alamat'] ?>"><br>
        <label for="no_telpon">No Telpon:</label><br>
        <input type="text" id="no_telpon" name="no_telpon" value="<?= $petugas['no_telpon'] ?>"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>