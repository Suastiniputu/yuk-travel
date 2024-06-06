<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
    $tanggal_pemesanan = htmlspecialchars($_POST['tanggal_pemesanan']);
    $detail_perjalanan = htmlspecialchars($_POST['detail_perjalanan']);
    $status_pemesanan = htmlspecialchars($_POST['status_pemesanan']);
    $metode_pembayaran = htmlspecialchars($_POST['metode_pembayaran']);

    $stmt = $conn->prepare("INSERT INTO tb_pemesanan (id_pelanggan, id_destinasi, tanggal_pemesanan, status_pemesanan, metode_pembayaran) VALUES (?, ?, ?, 'pending', ?)");
    $stmt->execute([$id_pelanggan, $tanggal_pemesanan, $detail_perjalanan, $metode_pembayaran]);

    echo "Booking successful!";
}
?>
