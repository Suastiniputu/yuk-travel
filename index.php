<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YukTravel - Your Travel Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h1>YukTravel</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#booking">Booking</a></li>
                <li><a href="#kendaraan">Kendaraan</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
       <div>
            <h2>Selamat Datang di YukTravel - Portal Wisata Pilihanmu!</h2>
            <p>Di YukTravel, kami menyediakan akses mudah dan inspiratif untuk menjelajahi keindahan dunia. Halaman utama kami adalah pintu gerbang menuju petualangan tak terlupakan, mempersembahkan beragam fitur yang akan memenuhi segala kebutuhan perjalanan Anda.</p>
       </div>
    </section>

    <section id="destinations" class="destinations">
        <div class="container">
            <h3>Temukan Destinasi Impian Anda di Bali!</h3>
            <p>Dari pantai yang menawan hingga pura yang megah, Bali menawarkan berbagai destinasi wisata yang memukau. Jelajahi keindahan Pulau Dewata dengan fitur pencarian canggih kami.</p>

            <div class="destinations-card">
            <?php
                // Konfigurasi database
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "db_travel";

                // Buat koneksi
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Cek koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data destinasi
                $sql = "SELECT nama_destinasi, jarak FROM tb_destinasi";
                $result = $conn->query($sql);

                // Tampilkan data destinasi
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="card">';
                        echo '<h4>' . $row["nama_destinasi"] . '</h4>';
                        echo '<p>' . $row["jarak"] . 'meter</p>';
                        echo '</div>';
                    }
                } else {
                    echo "Tidak ada destinasi yang ditemukan.";
                }

                // Tutup koneksi
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <section id="booking">
        <div class="container">
            <h3>Rencanakan Perjalanan Anda dengan Mudah!</h3>
            <p>Di YukTravel, kami mempermudah Anda dalam merencanakan perjalanan. Akses informasi tentang transportasi dan atraksi wisata dengan mudah.</p>

            <div class="booking-options">
            <?php
                // Buat koneksi
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Cek koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data pemesanan
                $sql = "SELECT id_pelanggan, tanggal_pemesanan, detail_perjalanan, status_pemesanan, metode_pembayaran FROM tb_pemesanan";
                $result = $conn->query($sql);

                // Tampilkan data pemesanan
                if ($result->num_rows > 0) {
                    echo '<table>';
                    echo '<tr><th>ID Pelanggan</th><th>Tanggal Pemesanan</th><th>Detail Perjalanan</th><th>Status Pemesanan</th><th>Metode Pembayaran</th></tr>';
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row["id_pelanggan"] . '</td>';
                        echo '<td>' . $row["tanggal_pemesanan"] . '</td>';
                        echo '<td>' . $row["detail_perjalanan"] . '</td>';
                        echo '<td>' . $row["status_pemesanan"] . '</td>';
                        echo '<td>' . $row["metode_pembayaran"] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo "Tidak ada pemesanan yang ditemukan.";
                }

                // Tutup koneksi
                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <section id="kendaraan">
        <div class="container">
            <h3>Sewa Kendaraan untuk Kemudahan Perjalanan Anda!</h3>
            <p>Kami menyediakan berbagai pilihan kendaraan untuk disewa, mulai dari mobil hingga motor, agar Anda dapat menjelajahi destinasi dengan bebas dan fleksibel.</p>

            <div class="vehicle-options">
            <?php
                // Buat koneksi
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Cek koneksi
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Ambil data kendaraan
                $sql = "SELECT jenis_kendaraan, kapasitas FROM tb_kendaraan";
                $result = $conn->query($sql);

                // Tampilkan data kendaraan
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="option">';
                        echo '<h4>' . $row["jenis_kendaraan"] . '</h4>';
                        echo '<p>Kapasitas: ' . $row["kapasitas"] . ' orang</p>';
                        echo '</div>';
                    }
                } else {
                    echo "Tidak ada kendaraan yang ditemukan.";
                }

                // Tutup koneksi
                $conn->close();
                ?>
            </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h3>Hubungi Kami</h3>
            <p>Butuh bantuan atau punya pertanyaan? Jangan ragu untuk menghubungi tim kami. Kami siap membantu Anda dengan segala kebutuhan perjalanan Anda.</p>

            <form action="#" method="post" class="contact-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 YukTravel. All rights reserved.</p>
    </footer>

</body>
</html>
