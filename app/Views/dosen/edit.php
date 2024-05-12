<!-- views/dosen/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
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
        <input type="text" id="bidang" name="bidang" value="<?= $dosen['bidang'] ?>"><br>
        <label for="email_dosen">Email:</label><br>
        <input type="text" id="email_dosen" name="email_dosen" value="<?= $dosen['email_dosen'] ?>"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
