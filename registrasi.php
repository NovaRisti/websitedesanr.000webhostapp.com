<?php
include 'koneksi.php';

$Nama = $_POST['Nama'] ?? '';
$Email = $_POST['Email'] ?? '';
$Password = $_POST['Password'] ?? '';
$Konfirmasi_Password = $_POST['Konfirmasi_Password'] ?? '';

$query_sql = "INSERT INTO registrasi (Nama, Email, Password, Konfirmasi_Password)
              VALUES ('$Nama', '$Email', '$Password', '$Konfirmasi_Password')";

if ($conn && mysqli_query($conn, $query_sql)) {
    header("Location: registrasi.html");
} else {
    echo "Pendaftaran gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
