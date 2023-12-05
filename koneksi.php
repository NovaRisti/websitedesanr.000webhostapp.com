<?php

$conn = new mysqli("localhost", "root", "", "login_registrasi");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
