<?php
session_start();
include 'db_config.php'; // Pastikan file ini berisi koneksi ke database $conn


// Ambil input dari form login
$username_or_email = $_POST['username_or_email'];
$password = $_POST['password'];


// Lindungi dari SQL Injection
$username_or_email = mysqli_real_escape_string($conn, $username_or_email);
$password = mysqli_real_escape_string($conn, $password);


// Cek apakah user ada berdasarkan email atau username
$query = "SELECT * FROM users WHERE email = '$username_or_email' OR username = '$username_or_email'";
$result = mysqli_query($conn, $query);


if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);


    //tes debug layar
    echo "Input password (plaintext): " . $password . "<br>";
    echo "Password dari DB (hash): " . $user['password'] . "<br>";
    
    // Gunakan password_verify untuk cek kecocokan password
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];


        header("Location: home.php");
        exit();
    } else {
        echo "<script>alert('Password salah.'); window.location.href='loginnexora.html';</script>";
    }
} else {
    echo "<script>alert('Akun tidak ditemukan.'); window.location.href='loginnexora.html';</script>";
}


?>
