<?php
require 'koneksi.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$query_sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query_sql);

if ($conn && mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Email atau password Anda salah, silakan coba login kembali: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


