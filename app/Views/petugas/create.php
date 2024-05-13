<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
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

        .btn-batal:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Petugas</h1>
        <form action="<?= base_url('petugas/store') ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <label for="tugas">Tugas:</label>
            <input type="text" id="tugas" name="tugas">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat">
            <label for="no_telpon">No Telpon:</label>
            <input type="text" id="no_telpon" name="no_telpon">
            <input type="submit" value="Simpan">
            <a href="<?= base_url('/petugas') ?>" class="btn-batal">Batal</a>
        </form>
    </div>
</body>
</html>
