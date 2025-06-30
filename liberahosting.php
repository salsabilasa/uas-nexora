<?php
require 'includes/config.php';
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Libera Hosting</title>
   <link rel="shorcut icon" href="assets/logo nexora FINAL-24.jpg" type="image/x-icon" , border-radius="50%">

   <!--Buat responsif di perangkat mobile jadi pakai viewpor, Nambah Bootstrap CSS-->
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
               <li class="nav-item"><a class="nav-link active" href="liberahosting.php">Libera Hosting</a></li>
               <li class="nav-item"><a class="nav-link" href="marketplace.php">Marketplace War</a></li>
               <li class="nav-item"><a class="nav-link" href="collab.php">Collaboration Arena</a></li>
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
            <h1><strong>WELCOME TO LIBERA HOSTING</strong></h1>
      </p>
      <h3>Build. Break. Rule Your own World</center>
      </h3>

      <p>Pernah ngerasa dunia ini nggak cukup luas buat ide gilamu? Di Nexora, kami nggak cuma kasih ruang — kami kasih
         dunia. Dan lewat Libera Hosting, kamu punya kuasa penuh atas dunia digitalmu sendiri. Ini bukan soal sewa
         server biasa. Ini soal bikin markas rahasia, kastil langit, atau arena PvP penuh jebakan maut yang kamu desain
         sendiri. Di balik satu klik, ada teknologi yang siap jagain server kamu dari zombie, lag, sampai griefing
         toxic. Karena di sini, kamu bukan sekadar player — kamu <strong>admin dunia yang kamu ciptakan
            sendiri.</strong></p>

      <p>Mulai dari 1 teman sampai 100 pejuang, dari survival chill sampai hardcore chaos — kamu yang atur ritmenya.</p>

      <p>Libera Hosting didesain buat petualang, kreator, dan pemimpi yang nggak suka dibatasin. Kalau kamu udah capek
         sama server yang ngelag pas mau boss fight, atau error pas bikin dungeon, saatnya pindah ke tempat yang ngerti
         apa itu "main serius, tapi tetap fun."</p>

      <p><strong>Bangun dunia kotak-kotakmu, sesuaikan dengan gaya mainmu.</strong></p>
      <p>Nexora Libera Hosting kasih kamu kebebasan penuh buat milih kapasitas server sesuai kebutuhan. Mau 1GB buat
         server private kecil bareng temen, atau 8GB buat survival mode plus plugin chaos — semua bisa kamu atur sesuka
         hati.</p>

      <p><strong>Dan hey — fitur-fitur ini bukan sekadar pelengkap:</strong>


         <!--id buat narik bootsrap untuk kartu card bagian daftar aktif-->
      <div class="container mb-5" id="projek">
         <br>
         <p></p>

         <!--MULAI DISINIIIIII-->
         <div class="text-center my-5">
            <h1><strong>Libera Hosting Fitures</strong></h1>
         </div>

         <div class="row g-4">
            <!-- CARD 1 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="CUSTOM SKIN MENECRAFT">

                  <div class="card-body text-start">
                     <h5 class="card-title">Full Custom Rules, RAM & Storage — </h5>
                     <p class="card-text">bikin servermu punya cerita sendiri dan sesuai kebutuhan</p>
                  </div>
               </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="Minecraft Java & Bedrock">

                  <div class="card-body text-start">
                     <h5 class="card-title">Anti-Grief Shield — </h5>
                     <p class="card-text">biar hasil karyamu nggak dijahatin anak iseng.</p>
                  </div>
               </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/war minecraft.jpg" class="card-img-top" alt="Crack Installer Minecraft">

                  <div class="card-body text-start">

                     <h5 class="card-title">Fast Lane Server — </h5>
                     <p class="card-text">kecepatan jadi prioritas, bukan janji doang.</p>
                  </div>
               </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="test">

                  <div class="card-body text-start">
                     <h5 class="card-title">Plugin & Mod Installer</h5>
                     <p class="card-text">sekali klik, dunia muncul</p>
                  </div>
               </div>
            </div>

            <!-- CARD 5 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/war minecraft.jpg" class="card-img-top" alt="">

                  <div class="card-body text-start">
                     <h5 class="card-title">Auto Backup — Dukungan Java & Bedrock</h5>
                     <p class="card-text">karena kehilangan data itu tragedi (kami juga pernah, sakitnya nyata).</p>
                  </div>
               </div>
            </div>

            <!-- CARD 6 -->
            <div class="col-sm-6 col-lg-4">
               <div class="card h-100 shadow">

                  <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="">

                  <div class="card-body text-start">
                     <h5 class="card-title">24/7 Support — </h5>
                     <p class="card-text">tim kami siap bantu kamu, bahkan jam 2 pagi pas plugin error.</p>
                  </div>
               </div>
            </div>


            <p>Siap jadi tuan rumah digitalmu sendiri? Ayo hidupkan dunia yang selama ini cuma ada di kepalamu.
               <br>Buruan claim server-mu sekarang!
            </p>
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
</body>

</html>