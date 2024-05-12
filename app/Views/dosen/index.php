<!-- views/dosen/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Dosen</title>
    <style>
        body {
            background-color: #6495ED; /* Warna biru */
            color: #000; /* Warna teks putih */
            font-family: Arial, sans-serif; /* Jenis font */
            margin: 0; /* Menghapus margin */
            padding: 0; /* Menghapus padding */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #a0da00;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #a05a24;
            color: #fff; /* Warna teks putih */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .btn {
            background-color: #1c9921; /* Warna hijau */
            color: #2a04c6;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #45a049; /* Warna hijau lebih gelap saat dihover */
        }
    </style>
</head>
<body>
    <h1>List Dosen</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dosen as $item): ?>
            <tr>
                <td><?= $item['nama_dosen'] ?></td>
                <td><?= $item['bidang'] ?></td>
                <td><?= $item['email_dosen'] ?></td>
                <td>
                    <a href="<?= base_url('dosen/edit/'.$item['id_dosen']) ?>">Edit</a>
                    <a href="<?= base_url('dosen/delete/'.$item['id_dosen']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('dosen/create') ?>" class="btn">Tambah Dosen</a>
</body>
</html>
