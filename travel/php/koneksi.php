<?php
// Konfigurasi koneksi ke database
$servername = "127.0.0.1:3310";
$username = "root";
$password = "";
$dbname = "balipath";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
