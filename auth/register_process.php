<?php
include 'db_config.php';


$username = $_POST['username'];
$email = $_POST['email'];
$raw_password = $_POST['password'];
$password = password_hash($raw_password, PASSWORD_DEFAULT); // Enkripsi password


// Cek apakah username atau email sudah terdaftar
$stmt = $conn->prepare("SELECT * FROM users WHERE email=? OR username=?");
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    echo "<script>alert('Email atau username sudah terdaftar!'); window.location.href='loginnexora.html';</script>";
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='loginnexora.html';</script>";
    } else {
        echo "<script>alert('Gagal daftar: " . $stmt->error . "'); window.location.href='loginnexora.html';</script>";
    }
}
    $stmt->close();
    $conn->close();


?>
