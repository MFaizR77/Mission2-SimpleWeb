<?php
// konfigurasi koneksi database
$host = "localhost";
$user = "root"; // ganti sesuai user mysql berbeda
$pass = "";     // ganti jika ada password mysql
$db = "database_akademik";

//koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

//cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel mahasiswa
$sql = "SELECT nim, nama, umur FROM mahasiswas ORDER BY nama ASC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['umur']; ?></td>
                       <td>
                                <a href="inputMahasiswa.php">tambah</a> |
                                <a href="detailMahasiswa.php?nim=<?= $row['nim'] ?>">Detail</a> |
                                <a href="edit.php?nim=<?= $row['nim'] ?>">Edit</a> |
                                <a href="delete.php?nim=<?= $row['nim'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
                     </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data mahasiswa.</p>
    <?php endif; ?>
</body>

</html>

<?php $conn->close(); ?>