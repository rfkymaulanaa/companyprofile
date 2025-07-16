<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);

if (password_verify($password, $data['password'])) {
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $data['nama'];
    header("Location: index.php");
} else {
    echo "<script>alert('Email atau password salah'); window.location.href='index.php';</script>";
}

?>