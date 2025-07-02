<?php
require '../includes/config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $username = trim($_POST['username'])
require '../includes/config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: /index.php');
        exit;
    } else {
        $message = "Login gagal! Username atau password salah.";
    }
}