<?php
session_start();
include "koneksi.php";
cekLogin();

$judul = $_POST['judul'];
$namafile = $_FILES['foto']['name'];
$tmpname = $_FILES['foto']['tmp_name'];

$ekstensiFoto = explode('.', $namafile);
$ekstensiFoto = strtolower(end($ekstensiFoto));

$namaFileBaru = $judul;
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiFoto;

move_uploaded_file($tmpname, "assets/images/galeri/" . $namaFileBaru);

$query = "INSERT INTO galeri (judul, foto) VALUES ('$judul', '$namaFileBaru')";
mysqli_query($conn, $query);

header("Location: index.php?page=galeri");
?>