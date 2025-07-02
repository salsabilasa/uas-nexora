<?php
// 1. Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_nexora");


// 2. Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


// 3. Ambil data dari form
$nomor_kartu        = htmlspecialchars($_POST['nomor_kartu']);
$tanggal_pembayaran = $_POST['tanggal_pembayaran'];
$kode_cvv           = htmlspecialchars($_POST['kode_cvv']);
$metode             = $_POST['metode'];
$total              = $_POST['total'];


// 4. Simpan ke database
$query = "INSERT INTO payment (nomor_kartu, tanggal_pembayaran, kode_cvv, metode, total)
          VALUES ('$nomor_kartu', '$tanggal_pembayaran', '$kode_cvv', '$metode', '$total')";


if (mysqli_query($koneksi, $query)) {
    echo "Pembayaran berhasil disimpan!";
} else {
    echo "Gagal menyimpan: " . mysqli_error($koneksi);
}


// 5. Tutup koneksi
mysqli_close($koneksi);
?>
