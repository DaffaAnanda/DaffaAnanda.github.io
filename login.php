<?php

if (isset($_POST['email']) || isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perbandingan menggunakan operator '==' untuk memeriksa apakah email dan password sesuai
    if ($email == 'admin@admin.com' && $password == 'admin') {
        // Mengarahkan pengguna ke dashboard jika email dan password benar
        header('Location: ./../dashboard.php');
        exit(); // Tambahkan exit untuk menghentikan eksekusi setelah redirect
    } else {
        // Menampilkan pesan kesalahan jika email atau password salah
        echo "Wrong email or password";
        // Kamu bisa mengaktifkan redirect ke halaman login lagi dengan menghapus komentar di bawah
        // header('Location: ./');
    }
}

?>
