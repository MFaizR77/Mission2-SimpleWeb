<?php
// konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "database_akademik";

// koneksi
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil nim dari URL
$nim = $_GET['nim'] ?? null;
if (!$nim) {
    die("NIM tidak ditemukan.");
}

// jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? '';
    $umur = $_POST['umur'] ?? '';

    // update data mahasiswa
    $sql = "UPDATE mahasiswas SET nama = ?, umur = ? WHERE nim = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nama, $umur, $nim);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='displayMahasiswa.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
    exit;
}

// ambil data mahasiswa untuk ditampilkan di form
$sql = "SELECT * FROM mahasiswas WHERE nim = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nim);
$stmt->execute();
$result = $stmt->get_result();
$mhs = $result->fetch_assoc();

if (!$mhs) {
    die("Data mahasiswa tidak ditemukan.");
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
</head>
<body>
  <h2>Edit Mahasiswa</h2>

  <form method="POST">
    <p>
      <label>NIM: </label>
      <input type="text" name="nim" value="<?= htmlspecialchars($mhs['nim']) ?>" readonly>
    </p>
    <p>
      <label>Nama: </label>
      <input type="text" name="nama" value="<?= htmlspecialchars($mhs['nama']) ?>" required>
    </p>
    <p>
      <label>Umur: </label>
      <input type="number" name="umur" value="<?= htmlspecialchars($mhs['umur']) ?>" required>
    </p>
    <p>
      <button type="submit">Simpan Perubahan</button>
      <a href="displayMahasiswa.php">Kembali/batal</a>
    </p>
  </form>
</body>
</html>
