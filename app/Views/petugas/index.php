<!-- views/dosen/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Petugas</title>
    <style>
        body {
            background-color: #6495ED; 
            color: #000; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #a05a24;
            color: #fff; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .btn {
            background-color: #1c9921; 
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
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <h1>List Petugas</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tugas</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($petugas as $item): ?>
            <tr>
                <td><?= $item['nama'] ?></td>
                <td><?= $item['tugas'] ?></td>
                <td><?= $item['alamat'] ?></td>
                <td><?= $item['no_telpon'] ?></td>
                <td>
                    <a href="<?= base_url('petugas/edit/'.$item['id']) ?>">Edit</a>
                    <a href="<?= base_url('petugas/delete/'.$item['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('petugas/create') ?>" class="btn">Tambah Petugas</a>
</body>
</html>
