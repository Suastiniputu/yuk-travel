<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_travel";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
