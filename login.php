<?php
include 'db_config.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Ambil data user dari database
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "<script>alert('Login berhasil!'); window.location.href='beranda.html';</script>";
    } else {
        echo "<script>alert('Password salah!'); window.location.href='loginnexora.html';</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='loginnexora.html';</script>";
}
$stmt->close();
$conn->close();
?>