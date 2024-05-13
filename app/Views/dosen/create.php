<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #8fbbb1; /* Ubah warna background */
        }

        h1 {
            color: #000;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

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

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-home {
            display: block;
            width: fit-content;
            margin: 20px auto; /* Menambahkan margin agar tombol terletak di tengah */
            background-color: #1c9921; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-batal {
            display: block;
            width: fit-content;
            margin: 20px auto; /* Menambahkan margin agar tombol terletak di tengah */
            background-color: #991c1c; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-home:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <h1>Tambah Dosen</h1>
    <form action="<?= base_url('dosen/store') ?>" method="post">
        <label for="nama_dosen">Nama:</label><br>
        <input type="text" id="nama_dosen" name="nama_dosen"><br>
        <label for="bidang">Bidang:</label><br>
        <select id="bidang" name="bidang">
            <option value="">harap isi</option>
            <option value="Pemograman">Pemograman</option>
            <option value="statiska">Statiska</option>
            <option value="Fisika">Fisika</option>
            <option value="Data Analisis">Data Analisis</option>
            <option value="Perancangan Sistem Informasi">Perancangan Sistem Informasi</option>
            <option value="Penulisan Ilmiah">Penulisan Ilmiah</option>
            <!-- Tambahkan opsi lainnya sesuai dengan daftar mata kuliah -->
        </select><br>
        <label for="email_dosen">Email:</label><br>
        <input type="text" id="email_dosen" name="email_dosen"><br><br>
        <input type="submit" value="Simpan">
        <a href="<?= base_url('/dosen') ?>" class="btn-batal">batal</a>
    </form>
    <!-- Tombol menuju halaman Home -->
    <a href="<?= base_url() ?>" class="btn-home">Home</a>
</body>
</html>
