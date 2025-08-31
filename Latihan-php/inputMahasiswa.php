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

// jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim  = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $umur = $_POST['umur'] ?? '';

    if ($nim && $nama && $umur) {
        $sql = "INSERT INTO mahasiswas (nim, nama, umur) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nim, $nama, $umur);

        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil disimpan!'); window.location='displayMahasiswa.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "<script>alert('Semua field harus diisi!');</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
</head>
<body>
  <h2>Tambah Mahasiswa</h2>

  <form method="POST">
    <p>
      <label>NIM: </label>
      <input type="text" name="nim" required>
    </p>
    <p>
      <label>Nama: </label>
      <input type="text" name="nama" required>
    </p>
    <p>
      <label>Umur: </label>
      <input type="number" name="umur" required>
    </p>
    <p>
      <button type="submit">Simpan</button>
      <a href="latihan8.php">Batal</a>
    </p>
  </form>
</body>
</html>
