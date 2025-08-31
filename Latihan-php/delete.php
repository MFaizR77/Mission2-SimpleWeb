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

// jalankan query delete
$sql = "DELETE FROM mahasiswas WHERE nim = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nim);

if ($stmt->execute()) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='displayMahasiswa.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
