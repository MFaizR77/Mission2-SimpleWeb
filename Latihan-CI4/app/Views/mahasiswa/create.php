<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="<?= base_url('/mahasiswa/store') ?>" method="POST">
        <label>NIM:</label>
        <input type="text" name="nim" required><br><br>
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>