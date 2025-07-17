<?php
// download.php

// 1. Sertakan file koneksi database Anda
include 'koneksi.php'; // Pastikan koneksi database sudah benar

// 2. Pastikan ada parameter 'id' di URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // 3. Ambil informasi file dari database berdasarkan ID
        $stmt = $conn->prepare("SELECT file_name, file_path FROM articles WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // AMBIL HASIL DARI STATEMENT SETELAH EKSEKUSI
        $result = $stmt->get_result();

        // Cek jika artikel ditemukan
        if ($result->num_rows == 1) {
            // Fetch data menggunakan fetch_assoc() pada hasil
            $file = $result->fetch_assoc();
            $file_path = $file['file_path'];
            $file_name_original = $file['file_name'];

            // 4. Pastikan file benar-benar ada di server
            if (file_exists($file_path)) {
                // 5. Set header HTTP untuk memaksa browser men-download file
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($file_name_original) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file_path));

                // 6. Baca file dan kirimkan ke output (browser)
                flush(); // Kosongkan buffer sistem
                readfile($file_path);
                exit;
            } else {
                die("Error: File tidak ditemukan di server.");
            }
        } else {
            die("Error: Artikel dengan ID tersebut tidak ditemukan.");
        }
    } catch (Exception $e) { // Lebih baik gunakan Exception umum untuk menangkap semua error
        die("Error: Terjadi masalah pada database. " . $e->getMessage());
    }
} else {
    die("Error: Permintaan tidak valid. ID artikel tidak disediakan.");
}