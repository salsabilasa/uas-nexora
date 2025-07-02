<?php
// home.php


session_start();


// Cek apakah user sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== TRUE) {
    // Jika belum login, redirect kembali ke halaman login
    $_SESSION['message'] = "Anda harus login untuk mengakses halaman ini.";
    header("Location: index.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengguna</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; background-color: #f0f8ff;}
        .welcome { font-size: 2em; color: #333; }
        .logout-btn { padding: 10px 20px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; margin-top: 20px; display: inline-block;}
        .logout-btn:hover { background-color: #c82333; }
    </style>
</head>
<body>
    <div class="welcome">
        <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Anda berhasil login.</p>
        <p>Ini adalah halaman dashboard Anda.</p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
