<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'db_nexora');


// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}


// Ambil data dari form
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan  = $_POST['Pesan'];


// Simpan ke tabel kontak_kami
$sql = "INSERT INTO kontak_kami (Nama_Lengkap, Email, Subjek, Pesan) 
        VALUES ('$nama', '$email', '$subjek', '$pesan')";


if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Terima kasih sudah menghubungi kami! Pesanmu sudah kami terima dan akan segera kami tanggapi');
            window.location.href = 'contact.html'; // Ganti dengan halaman yang kamu mau
          </script>";
} else {
    echo "<script>
            alert('Terjadi kesalahan: " . $conn->error . "');
            window.history.back(); // Kembali ke form
          </script>";
}


// Tutup koneksi
$conn->close();
?>
