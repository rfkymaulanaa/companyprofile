<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$hashedPassword')";

mysqli_query($conn, $query);

header("Location: index.php");
?>