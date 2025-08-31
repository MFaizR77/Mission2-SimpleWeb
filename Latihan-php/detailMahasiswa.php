<?php
// konfigurasi koneksi database
$host = "localhost";
$user = "root"; // ganti sesuai user mysql berbeda
$pass = "";     // ganti jika ada password mysql
$db   = "database_akademik";

// koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ambil parameter nim dari URL
$nim = $_GET['nim'] ?? null;

if (!$nim) {
    die("NIM tidak ditemukan.");
}


$sql  = "SELECT * FROM mahasiswas WHERE nim = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nim); 
$stmt->execute();
$result = $stmt->get_result();
$mhs = $result->fetch_assoc();

if (!$mhs) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h2>Detail Mahasiswa</h2>

  <p><strong>NIM:</strong> <?= htmlspecialchars(string: $mhs['nim']); ?></p>
  <p><strong>Nama:</strong> <?= htmlspecialchars($mhs['nama']); ?></p>
  <p><strong>Umur:</strong> <?= htmlspecialchars($mhs['umur']); ?></p>

  <p><a href="displayMahasiswa.php">Kembali ke Daftar</a></p>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
