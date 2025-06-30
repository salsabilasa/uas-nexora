<?php
require 'includes/config.php';
require 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Collaboration Arena</title>
  <link rel="shorcut icon" href="assets/logo nexora FINAL-24.jpg" type="image/x-icon" , border-radius="50%">

  <!--Buat responsif di perangkat mobile jadi pakai viewpor, Nambah Bootstrap CSS CDN(Content Delivery Network), nyimpan file pustaka open source biar gausah unduh-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!--buat lanjut custom CSS di tab sebelah-->
  <link href="style.css" rel="stylesheet">
</head>

<body>

  <!-- Ini html buat bagian Bar Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Nexora Official</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="liberahosting.php">Libera Hosting</a></li>
          <li class="nav-item"><a class="nav-link" href="marketplace.php">Marketplace War</a></li>
          <li class="nav-item"><a class="nav-link active" href="collab.php">Collaboration Arena</a></li>
          <li class="nav-item"><a class="nav-link" href="classkill.php">Skill Up Lab</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us?</a></li>

          <?php if (is_logged_in()): ?>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#">Hi, <?= htmlspecialchars($_SESSION['username']) ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="/auth/logout.php">Logout</a>
            </li>
          <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="/auth/login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/auth/register.php">Register</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Foto Profil & Biodata -->
  <div class="container my-5 text-center">
    <img src="assets/nexora logo no text.png" alt="Foto Profil" width="500px" height="500px" />
  </div>

  <div class="container">

    <p>
      <center>
        <h1><strong>COLLABORATION ARENA</strong></h1>
    </p>
    <h3>Ideas Don't Work Unless We Do- Together</h3>
    </center>
    <p>Kamu punya ide liar, proyek kreatif, platform masa depan atau butuh partner kreatif buat bikin sesuatu yang beda
      dari biasanya? Nexora siap buat kolaborasi dari berbagai bidang.
      Collab Arena itu bukan ruang biasa — ini zona bebas buat para kreator, gamer, pengajar, developer, atau pemimpi.
    </p>>

    <p>Disini, kamu bisa duduk bareng kita, ngerancang hal baru yang bahkan belum sempat kamu bayangin. Kalau kamu
      percaya dunia butuh lebih dari sekedar rutinitas, yuk kita bikin bareng</p>

    <br>
    <div class="collab" class="collab-section">
      <p>
        <center>
          <h3><strong>Fire With Us!</strong></h3>
      </p>


      <form class="collab-form">
        <label for="fullname">Nama Lengkap</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="brand">Nama Brand</label>
        <input type="text" id="brand" name="subject" required>

        <label for="jenis">Jenis Colaborasi yang diinginkan</label>
        <input type="text" id="jenis" name="subject" required>

        <label for="ide">Ceritain Ide Kamu</label>
        <textarea id="message" name="ide" rows="5" required></textarea>

        <button type="submit">Ajak Kolaborasi!</button>
      </form>

    </div>
    </section>


    <!-- bagian contact untuk hubungan -->
    <!--id buat narik bootsrap untuk kartu card bagian daftar aktif-->
    <div class="container text-center mb-5" id="kontak">
      <div class="text-center my-5">
        <!--Instgaram-->

        <a href="https://www.instagram.com/nexora.ofc?igsh=MWFyNTFhZHQ2d284bQ==" class="btn btn-outline-light m-1"
          target="_blank">Instagram</a>

        <!--WhasApp-->
        <a href="https://wa.me/6285167935226" class="btn btn-outline-light m-1" target="_blank">WhatsApp</a>
        </a>

        <!--Email-->
        <a href="mailto:hellonexoraa@gmail.com" class="btn btn-outline-light m-1" target="_blank">Email</a>
      </div>

      <div class="text-center my-3">
        <p id="tekskenalan">kalau kamu udah follow kami, <strong>klik ORACLE </strong>sekarang juga!</p>

        <button onclick="ubahteks()" class="btn btn-warning mt-3">ORACLE</button>

      </div>
    </div>
  </div>

  <button onclick="scrollToTop()" id="backToTopBtn" title="Kembali ke Atas">
    <img src="assets/upload.png" alt="arrow up">
  </button>
  <!-- Footer -->
  <footer class="footerstyle">
    &copy;2025 NEXORA. ALL RIGHTS RESERVED.
  </footer>
  <!-- Code JS bootstrap buat fitur aktif yang sebelumya (carousel, navbar toogle dll) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>

  <script>
    function ubahteks() {
      document.getElementById("tekskenalan").innerText =
        "Selamat! Kamu mendapat diskon 20%. Ketik 'DEVRIES' untuk klaim saat kolaborasi.";
    }
  </script>

</body>

</html>