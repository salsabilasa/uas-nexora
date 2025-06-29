<?php
session_start();
include '../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Harap isi semua kolom'); window.location.href='../login.html';</script>";
        exit;
    }

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Simpan data login ke session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: ../pages/beranda.php");
            exit;
        } else {
            echo "<script>alert('Password salah'); window.location.href='../login.html';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan'); window.location.href='../login.html';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: ../login.html");
    exit;
}
