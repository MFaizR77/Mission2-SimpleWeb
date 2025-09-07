<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .search-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            padding: 8px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form button {
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #2980b9;
        }

        .add-link {
            display: block;
            text-align: right;
            margin: 15px 0;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .add-link:hover {
            color: #2980b9;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table a {
            color: #2980b9;
            text-decoration: none;
            margin: 0 5px;
        }

        table a:hover {
            color: #1a5f8a;
            font-weight: bold;
        }

        .confirm-delete {
            color: #e74c3c;
        }

        .confirm-delete:hover {
            color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>

        <!-- Form Pencarian -->
        <form method="GET" action="<?= base_url(relativePath: '/mahasiswa/search') ?>" class="search-form">
            <input type="text" name="q" placeholder="Cari..." value="<?= isset($_GET['q']) ? esc($_GET['q']) : '' ?>">
            <button type="submit">Cari</button>
        </form>

        <!-- Tombol Tambah -->
        <a href="<?= base_url('/mahasiswa/create') ?>" class="add-link">+ Tambah Mahasiswa</a>

        <!-- Tabel Data -->
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (! empty($mahasiswas) && is_array($mahasiswas)): ?>
                    <?php foreach ($mahasiswas as $m): ?>
                    <tr>
                        <td><?= esc($m['nim']) ?></td>
                        <td><?= esc($m['nama']) ?></td>
                        <td><?= esc($m['jurusan']) ?></td>
                        <td>
                            <a href="<?= base_url('/mahasiswa/show/'.$m['id']) ?>">Detail</a> |
                            <a href="<?= base_url('/mahasiswa/edit/'.$m['id']) ?>">Edit</a> |
                            <a href="<?= base_url('/mahasiswa/delete/'.$m['id']) ?>" 
                               onclick="return confirm('Yakin ingin menghapus data ini?')" 
                               class="confirm-delete">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">Tidak ada data ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>