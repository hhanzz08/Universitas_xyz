<!-- views/dosen/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
</head>
<body>
    <h1>Tambah Dosen</h1>
    <form action="<?= base_url('dosen/store') ?>" method="post">
        <label for="nama_dosen">Nama:</label><br>
        <input type="text" id="nama_dosen" name="nama_dosen"><br>
        <label for="bidang">Bidang Pekerjaan:</label><br>
        <input type="text" id="bidang" name="bidang"><br>
        <label for="email_dosen">Email:</label><br>
        <input type="text" id="email_dosen" name="email_dosen"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
