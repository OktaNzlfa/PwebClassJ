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
// Mendapatkan data username dan password dari form pendaftaran 
$username = $_POST['username'];
$password = $_POST['password'];

// Membuka file untuk menambahkan data username dan password
$file = fopen("data_user.txt","a+");
fwrite($file, $username . ":" .$password . "\n");
fclose($file);

// Redirect ke halaman login 
header("Location: login.html");
exit;
?>

<html>
<body>
    <footer>
        <p>&copy; 2024 Web Pelatihan. All rights reserved.</p>
    </footer>
</body>
</html>