<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="<?= base_url('/mahasiswa/update/'.$mahasiswa['id']) ?>" method="POST">
        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" required><br><br>
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required><br><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>