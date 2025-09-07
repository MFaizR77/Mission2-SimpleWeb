<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title ?? 'Daftar Mahasiswa') ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; }
        .header { background:#007bff; color:#fff; padding:15px; text-align:center; }
        .menu { background:#f4f4f4; padding:10px; text-align:center; }
        .menu a { margin:0 10px; text-decoration:none; color:#007bff; }
        .content { padding:20px; min-height:300px; }
        .footer { background:#333; color:#fff; text-align:center; padding:10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn-detail { background-color: #007bff; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

    <div class="header">
        <h2>My Website</h2>
    </div>

    <div class="menu">
        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/berita') ?>">Berita</a>
        <a href="<?= base_url('/mahasiswa') ?>">Mahasiswa</a>
    </div>

    <div class="content">
        <h1>Daftar Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?= esc($mhs['nim']) ?></td>
                    <td><?= esc($mhs['nama']) ?></td>
                    <td><?= esc($mhs['umur']) ?></td>
                    <td><a href="<?= base_url('/mahasiswa/detail/' . $mhs['nim']) ?>" class="btn-detail">Detail</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>&copy; <?= date('Y') ?> My Website</p>
    </div>

</body>
</html>