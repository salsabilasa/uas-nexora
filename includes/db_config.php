<?php
$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'db_nexora';

$connect = new mysqli($host, $user, $pw, $db);

if ($connect->connect_error) {
    die("Koneksi Gagal" . $connect->connect_error);
}
