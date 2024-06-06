<?php
include 'koneksi.php';

// Fungsi untuk mendapatkan data destinasi
function getDestinations($conn) {
    $sql = "SELECT nama_destinasi, jarak FROM tb_destinasi";
    $result = $conn->query($sql);
    $destinasi = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $destinasi[] = $row;
        }
    }
    return $destinasi;
}

// Fungsi untuk mendapatkan data pemesanan
function getBookings($conn) {
    $sql = "SELECT id_pelanggan, tanggal_pemesanan, detail_perjalanan, status_pemesanan, metode_pembayaran FROM tb_pemesanan";
    $result = $conn->query($sql);
    $bookings = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
    }
    return $bookings;
}

// Fungsi untuk mendapatkan data kendaraan
function getVehicles($conn) {
    $sql = "SELECT jenis_kendaraan, kapasitas FROM tb_kendaraan";
    $result = $conn->query($sql);
    $vehicles = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $vehicles[] = $row;
        }
    }
    return $vehicles;
}
?>
