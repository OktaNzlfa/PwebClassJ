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
// Mendapatkan data username dan password dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Membaca data username dan password dari file
$file = fopen("data_user.txt", "r");
$valid = true;

// Looping untuk mencari data username dan password yang sesuai 
while (!feof($file)) {
    $line = trim(fgets($file));
    if ($line != "") {
        list($saved_username, $saved_password) = explode(":", $line);
        if ($saved_username == $username && $saved_password == $password) {
            $valid = true;
            break;
        }
    }
}

// Menutup file
fclose($file);

// Jika username dan password valid, redirect ke halaman beranda 
// Jika tidak valid, tampilkan pesan kesalahan
if ($valid){
    header("Location: pelatihan.html");
    exit;
}else{
    echo "<script>alert('Username atau password salah!');</script>"; 
    echo "<script>window.location = 'login.html';</script>";
}
?>

<html>
<body>
    <footer>
        <p>&copy; 2024 Web Pelatihan. All rights reserved.</p>
    </footer>
</body>
</html>