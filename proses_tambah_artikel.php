<?php
// proses_tambah_artikel.php

session_start();
include 'koneksi.php'; // Pastikan koneksi database sudah benar

// Keamanan: Pastikan hanya pengguna yang login yang bisa mengakses
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    // Jika tidak login, beri pesan error dan hentikan
    $_SESSION['message'] = "Akses ditolak. Anda harus login untuk menambah artikel.";
    $_SESSION['message_type'] = "danger";
    header('Location: index.php?page=artikel');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tittle = trim($_POST['tittle']);
    $kategori = trim($_POST['kategori']);

    // Validasi input
    if (empty($tittle) || empty($kategori) || !isset($_FILES['article_file']) || $_FILES['article_file']['error'] != 0) {
        $_SESSION['message'] = "Judul, kategori, dan file wajib diisi.";
        $_SESSION['message_type'] = "danger";
        header('Location: index.php?page=artikel');
        exit();
    }

    $target_dir = "uploads/articles/";
    $original_filename = basename($_FILES["article_file"]["name"]);
    $file_extension = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));
    $new_filename = uniqid('', true) . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;

    // Batasi ukuran file (misal: 5MB)
    if ($_FILES["article_file"]["size"] > 5000000) {
        $_SESSION['message'] = "Maaf, ukuran file terlalu besar. Maksimal 5MB.";
        $_SESSION['message_type'] = "danger";
        header('Location: index.php?page=artikel');
        exit();
    }

    // Izinkan format file tertentu
    $allowed_types = ['pdf', 'doc', 'docx', 'zip'];
    if (!in_array($file_extension, $allowed_types)) {
        $_SESSION['message'] = "Maaf, hanya format PDF, DOC, DOCX, & ZIP yang diizinkan.";
        $_SESSION['message_type'] = "danger";
        header('Location: index.php?page=artikel');
        exit();
    }

    // Coba pindahkan file yang diunggah
 if (move_uploaded_file($_FILES["article_file"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO articles (tittle, kategori, file_name, file_path) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $tittle, $kategori, $original_filename, $target_file);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Artikel berhasil ditambahkan!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Gagal menyimpan data ke database: " . mysqli_error($conn);
        $_SESSION['message_type'] = "danger";
    }
    mysqli_stmt_close($stmt);
}

    header('Location: index.php?page=artikel');
    exit();
}
?>