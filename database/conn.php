<?php
    $servername = "localhost"; // Nama server database (localhost jika dijalankan secara lokal)
    $username = "root"; // Username MySQL
    $password = ""; // Password MySQL (kosong jika tidak ada)
    $dbname = "marmutben"; // Nama database

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>