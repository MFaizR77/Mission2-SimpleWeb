<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
    <p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
    <p><strong>Jurusan:</strong> <?= $mahasiswa['jurusan'] ?></p>
    <a href="<?= base_url('/mahasiswa') ?>">Kembali</a>
</body>
</html>