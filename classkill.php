<?php
require 'includes/config.php';
require 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skill Up Lab</title>
  <link rel="shorcut icon" href="assets/logo nexora FINAL-24.jpg" type="image/x-icon" , border-radius="50%">
  <!--Buat responsif di perangkat mobile jadi pakai viewpor, Nambah Bootstrap CSS

CDN(Content Delivery Network), nyimpan file pustaka open source biar gausah unduh-->
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
          <li class="nav-item"><a class="nav-link" href="collab.php">Collaboration Arena</a></li>
          <li class="nav-item"><a class="nav-link active" href="classkill.php">Skill Up Lab</a></li>
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
        <h1><strong>CLASS SKILL NEXORA</strong></h1>
    </p>
    <h3>Sharpen your digital moves. Power up. Become the legend you were meant to be.</h3>
    </center>
    <p>Welcome to Class Skill Up Arena — tempat semua calon legend berkumpul buat naik level. Di sini, kamu nggak cuma
      belajar teori, tapi juga praktek langsung yang bikin skill kamu nambah XP tiap hari. Dari desain grafis,
      pengembangan game, sampai skill digital masa depan yang belum kamu duga — kami sediain medan latihannya.

      Entah kamu baru mulai atau udah setengah jalan menuju epic, kelas-kelas ini dibuat biar kamu bisa dapet knowledge
      yang bisa langsung dipake. Tanpa basa-basi, tanpa slide membosankan, cuma kamu, ide gilamu, dan tools yang tepat.
    </p>

    <p>bareng mentor yang ngerti dunia kamu, eksplorasi tools profesional, dan gabung komunitas yang suportif. Karena di
      Nexora, kamu bukan murid — kamu adalah Player One dalam journey kamu sendiri.</p>

    <center>
      <h3>COMING SOON</h3>
    </center>
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
</body>

</html>