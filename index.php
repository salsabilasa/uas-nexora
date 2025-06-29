<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Sudah login, arahkan ke beranda
    header("Location: pages/beranda.php");
    exit;
} else {
    // Belum login, arahkan ke login
    header("Location: login.html");
    exit;
}
