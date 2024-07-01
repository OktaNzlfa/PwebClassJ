<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelatihan - Web Pelatihan</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Web Pelatihan</h1>
        <nav>
            <ul>
                <li><a href="beranda.html">Beranda</a></li>
                <li><a href="profil.html">Profil</a></li>
                <li><a href="pelatihan.html">Pelatihan yang Ditawarkan</a></li>
                <li><a href="pendaftaran.html">Daftar Pelatihan</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>

<?php
// Pastikan file ini hanya diakses melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil data yang dikirimkan dari form
    $nama_peserta = $_POST['nama_peserta'];
    $email = $_POST['email'];
    $jenis_pelatihan = $_POST['jenis_pelatihan'];
    $jenis_langganan = $_POST['jenis_langganan'];
    
    } else {
        // Siapkan data untuk disimpan ke dalam file pendaftar.txt
        $data = "Nama Peserta: $nama_peserta\n";
        $data = "Email: $email\n";
        $data = "Pelatihan yang Dipilih: $jenis_pelatihan\n";
        $data = "Jenis Langganan: $jenis_langganan\n\n";
        
        // Simpan data ke dalamx file pendaftar.txt
        $file = 'pendaftar.txt';
        
        // Buka atau buat file pendaftar.txt untuk ditulis
        $handle = fopen($file, 'a');  // 'a' untuk append (menambahkan ke file yang sudah ada)
        
        // Tulis data ke dalam file
        if ($handle) {
            fwrite($handle, $data);
            fclose($handle);
            echo "<h2>Terima kasih, $nama_peserta, telah mendaftar!</h2>";
            echo "<p>Data Anda telah disimpan.</p>";
        } else {
            echo "Gagal menyimpan data.";
        }
}


// Misalnya, lakukan validasi sederhana
if (empty($nama_peserta) || empty($email) || empty($jenis_pelatihan) || empty($jenis_langganan)) {
        // Jika ada field yang kosong, beri pesan error
        echo "Semua field harus diisi!";
    } else {
        // Lakukan proses pendaftaran atau penyimpanan ke dalam database (contoh sederhana)
        
        // Misalnya, kita hanya akan menampilkan data yang telah diisi
        echo "<h2>Terima kasih, $nama_peserta, telah mendaftar!</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Pelatihan yang dipilih: $jenis_pelatihan</p>";
        echo "<p>Jenis langganan: $jenis_langganan</p>";
        }

    // } else {
    // // Jika file ini diakses secara langsung tanpa melalui metode POST, tampilkan pesan error
    // echo "Akses tidak diizinkan";

?>

<html>
<body>
    <footer>
        <p>&copy; 2024 Web Pelatihan. </p>
    </footer>
</body>
</html>