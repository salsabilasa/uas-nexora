<?php
require 'includes/config.php';
require 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexora Official</title>
  <!--buat munculin icon logo diatas web-->
  <link rel="shorcut icon" href="assets/logo nexora FINAL-24.jpg" type="image/x-icon" , border-radius="50%">
  <!--biar bisa responsif di perangkat mobile jadi pakai viewpor, Nambah Bootstrap CDN(Content Delivery Network), nyimpan file pustaka open source biar gausah unduh-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--buat lanjut custom stylig visual CSSnya di tab sebelah-->
  <link href="style.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">Nexora Official</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="liberahosting.php">Libera Hosting</a></li>
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


  <!-- bikin gambar otomatis bergulir-->
  <!--carouselheader fitur bootstrap css-->
  <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/minecraft1181.jpeg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="assets/minecraft traders.jpeg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="assets/Minecraft Thumbnail.jpg" class="d-block w-100" alt="Slide 2">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- buat set logo brand nexoranya -->
  <div class="container my-5 text-center">
    <img src="assets/logo nexora.png" alt="Foto Profil" width="500px" height="500px" />
  </div>

  <!-- bikin prompt perkenalan dgn pengunjung, jadi ada interaksi yang ngasi ketertarikan balik/feedback -->
  <div class="text-center my-4">
    <button onclick="kenalanDulu()" class="btn btn-warning">Kenalan Dulu Yuk!</button>
    <p id="ucapanSelamat" class="mt-3 fw-bold"></p>
  </div>

  <div class="container">

    <!--kenalin nexora-->
    <!--strong buat penegasan, buka cuma bold-->
    <p>
      <center>
        <h1><strong>WELCOME TO NEXORA</strong></h1>
    </p>
    <h3>The Future's Already Here</center>
    </h3>

    <p>Banyak orang bilang masa depan itu belum datang. Tapi kami percaya, masa depan sudah dimulai — dan kamu ada di
      tengah-tengahnya. Di Nexora, batas antara ide dan kenyataan menjadi tipis. Apa yang dulu hanya konsep di catatan
      buku, sekarang bisa jadi rilisan resmi. Apa yang semula cuma mimpi kreator muda, kini punya tempatnya sendiri.</p>

    <p>Di sinilah semuanya berkumpul. Gamer, Coder, Penulis, Animator, Modder, bahkan pemula yang baru saja belajar klik
      kanan dan save as. Nexora bukan hanya tempat bernaung — tapi ekosistem yang mengerti bahwa setiap kreativitas
      layak dapat panggung. Jadi, selamat datang. Kami tidak akan bilang "siapkan dirimu untuk masa depan", karena masa
      depannya... ya, sudah dimulai di sini.</p>

    <br>
    <p></p>
    <p>
      <center>
        <h1><strong>THE NEXORA LAUNCHPAD</strong></h1>
    </p>
    <h3>Where Digital Dreams Take Off</center>
    </h3>

    <p>Setiap impian digital butuh tempat buat ngegas. Dan kabar baiknya? Kamu baru nemu landasannya. Tim di balik
      Nexora tidak hanya membangun platform — mereka membangun ekosistem. Sebuah tempat di mana kreator muda bisa
      berkembang tanpa harus merasa tertinggal, terkucil, atau terpaksa mengikuti standar yang bukan miliknya.</p>

    <p>Di atas kertas, Nexora menjanjikan ruang yang inklusif dan terbuka bagi siapa saja: entah kamu desainer pemula,
      modder game rumahan, developer ambisius, atau hanya seorang pelajar dengan ide besar dan waktu sedikit.Tapi mari
      kita jujur. Kamu nggak bisa berharap komunitas digital yang dipenuhi orang-orang kreatif, ambisius, dan kompetitif
      bisa selalu rukun tanpa percikan konflik. Apalagi ketika kebanggaan personal, gaya desain, dan identitas digital
      dipertaruhkan. Kompetisi? Sudah pasti. Perbedaan pandangan? Hampir setiap hari. Tapi di sanalah letak kekuatannya.
      Nexora <strong>tidak takut dengan benturan ide</strong> — justru itu yang kami rayakan. Kami memfasilitasi
      pertarungan yang sehat antara “tim-tim digital” terbaik. Dari kreator skin Minecraft yang jago main warna dan
      detail piksel, hingga UI/UX designer yang bisa bikin landing page kayak galeri seni.
      Dari builder server paling stabil, sampai modder yang bisa akalin sistem tanpa bikin crash.</p>

    <p>Laga antara para kreator ini biasanya terjadi dalam bentuk showcase proyek, rating publik, tantangan bulanan,
      atau review battle yang panas tapi penuh hormat. Kemenangan dan kekalahan memang datang silih berganti, tapi
      semangat untuk berkembang dan membangun selalu jadi tujuan utama. Di Nexora, pertarungan terpenting bukan antar
      sesama — tapi melawan batas diri sendiri. Dan setiap langkahmu di sini, adalah bagian dari peluncuran besar menuju
      dunia digital yang kamu impikan.</p>

    <p><strong>Kuncinya satu:</strong> nyalakan ide, pasang sabuk, dan bersiaplah meluncur.</p>
    <br>
    <p></p>
    <p>
      <center>
        <h1><strong>NEXT-GEN POWERHOUSE SHOWDOWN</strong></h1>
    </p>
    <h3>Which Digital Force Leads?</center>
    </h3>

    <p>Siapa bilang persaingan itu buruk? Di Nexora, kami percaya sedikit ketegangan justru bisa melahirkan karya
      terbaik. Kami bukan sekadar platform kreatif — kami adalah arena digital tempat ratusan kreator muda saling unjuk
      kekuatan, bukan buat menjatuhkan, tapi buat mendorong satu sama lain naik level. Dari yang jago bikin texture pack
      sampai yang lihai nyusun bot AI, dari builder server andalan warnet sampai desainer landing page kelas dewa —
      semua punya tempat. Setiap proyek yang diunggah, setiap komentar yang ditinggalkan, setiap like, download, dan
      upvote — semuanya adalah bagian dari pertarungan diam-diam, tanpa darah, tapi penuh semangat dan harga diri
      digital.</p>

    <p>Selamat datang di arena kreatif paling panas sejak... ya, sejak Wi-Fi sekolah kamu nggak lagi buffering tiap dua
      menit. Di Nexora, kami nggak percaya semua orang harus selalu rukun dan sepakat. Justru kami percaya pada gesekan.
      Pada benturan ide. Karena di situlah kreativitas benar-benar diuji. Maka lahirlah Next-Gen Powerhouse Showdown —
      tempat para kreator digital adu karya, adu otak, dan sesekali adu ego (tenang, tetap sopan kok).</p>

    <p>Kamu bikin skin Minecraft yang detailnya bisa dipamerin ke NASA? Masuk.
      Kamu desainer UI/UX yang bikin orang nggak sadar udah nge-scroll 7 layar? Masuk.
      Atau kamu pelajar biasa yang berhasil bikin server tahan banting tanpa ngeluh? Ya, kamu juga masuk. Setiap bulan
      ada tantangan. Showcase. Voting publik. Review battle yang kadang lebih panas dari debat siapa yang lebih taktis:
      Dilla atau Zidan? Tapi jangan salah — di sini, menang bukan segalanya. Dan kalah bukan akhir dunia. Yang penting,
      kamu berani tampil. Kamu berani nyoba. Kamu berani bilang, “Oke, ini karyaku. Mau apa lo?”, Karena di Nexora, yang
      paling dihormati bukan yang paling berisik, tapi yang paling konsisten ngegas ide-nya.

      Jadi, siapa kekuatan digital berikutnya? Jawabannya terus berubah. Tapi pertanyaannya selalu sama: <strong>'Which
        Digital Force Leads?'</strong></p>

    <p>Satu cara untuk tahu jawabannya:
      <strong>ke arena!</strong>
    </p>
  </div>

  <!-- footer tapi bukan buat akhir, ini pembatas aja -->

  <footer class="custom-tagline">
    <p>&copy; 2025 NEXORA. ALL RIGHTS RESERVED.
      <br>TERMS OF USE | ADDITIONAL CONTENT INFORMATION | PRIVACY POLICE |
      <br>US STATE PRIVACY RIGHTS | CHILDREN'S ONLINE PRIVACY | INTEREST-BASED ADS |
      <br>DO NOT SELL OR SHARE MY PERSONAL INFORMATION
    </p>
  </footer>


  <!--id buat narik bootsrap untuk kartu card, isinya 3 pilar -->
  <div class="container mb-5" id="projek">
    <br>
    <p></p>

    <!--MULAI DISINIIIIII-->
    <div class="text-center my-5">
      <h1><strong>TOP 3 POWER ZONES</strong></h1>
      <h3>Pick Your Battlefield! </h3>
    </div>

    <!-- Bootstrap layout buat card-->
    <!--jarak antar card-->
    <div class="row g-4">
      <!--Di ukuran layar kecil (sm).
      Di layar besar (lg).-->
      <!-- CARD 1 -->
      <div class="col-sm-6 col-lg-4 hover-scale">
        <div class="card h-100 shadow">
          <img src="assets/minecraft sigma.jpeg" class="card-img-top" alt="CUSTOM SKIN MINECRAFT">
          <div class="card-body text-start">
            <h5 class="card-title"><strong>GAME & SERVER TOOLS</strong></h5>
            <p class="card-text"><strong>Kamu pegang kendali. Dunia virtual, peraturannya kamu yang
                bikin.</strong><br><br>
              Di Nexora, kita nggak cuma main game. Kita bangun dunia. Mau bikin server Minecraft kayak kerajaan
              fantasi? Atau mod GTA biar punya kota sendiri? Di sini tempatnya. Kita sediain hosting tangguh, tools
              canggih, sampai cheat legit (tapi aman) buat yang pengen seru-seruan. Karena jadi “dewa dunia digital” itu
              bukan mimpi. Sekarang, waktunya kamu mulai pengusaha server sendiri.</p>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-sm-6 col-lg-4 hover-scale">
        <div class="card h-100 shadow">
          <img src="assets/war minecraft.jpg" class="card-img-top" alt="Hosting Server Minecraft">
          <div class="card-body text-start">
            <h5 class="card-title"><strong>DESAIN GRAFIS & DIGITAL ASSET</strong></h5>
            <p class="card-text"><strong>Karya itu senjata, maka Nexora gudang senjata kreator.</strong><br><br>
              Poster, thumbnail, logo, preset, font ajaib, sampai aset YouTube dan texture game — semua bisa kamu
              temukan (atau jual) di sini. Punya gaya sendiri? Upload, jual, dan bangun branding kamu bareng Nexora. Di
              balik layar keren, selalu ada desainer keren. Jadi, apa kamu siap jadi kreator yang bikin orang berhenti
              scroll?</p>
          </div>
        </div>
      </div>
      <!-- CARD 3 -->
      <div class="col-sm- col-lg-4 hover-scale">
        <div class="card h-100 shadow">
          <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="Minecraft Java & Bedrock">
          <div class="card-body text-start">
            <h5 class="card-title"><strong>EDUKASI & DIGITAL SKILL LAB</strong></h5>
            <p class="card-text"><strong>Belajar nggak harus ngebosenin. Kadang cuma butuh teman dan tempat yang
                pas</strong><br><br>
              Skill bisa diasah. Tapi kalau bisa diasah sambil main dan ngopi, kenapa nggak? Di sini kamu bisa belajar
              desain, bikin server, jualan karya, bahkan jadi developer. Modul santai, video pendek, dan komunitas asik
              — semuanya nunggu kamu di Skill Lab Nexora. Kapan lagi upgrade versi terbaik dirimu tanpa tekanan?</p>
          </div>
        </div>
      </div>
    </div>


    <br>
    <br>

    <!--tambah button dengan JS murni-->
    <div class="container my-5 text-center">
      <button onclick="sapaDilla()" class="btn btn-warning mt-3">Clain Vitamin kamu disini!</button>
    </div>


    <!-- bagian contact buat tmpat hubungi -->
    <div class="container text-center mb-5" id="kontak">
      <div class="text-center my-5">

        <!--buat penekanan teks tebal pakai strong-->
        <h1><strong>COLLAB?</strong></h1>
        <p>Kamu bisa temukan kami di sosial media ini, klik aja!</p>
        <!--buat Instgaram-->

        <a href="https://www.instagram.com/nexora.ofc?igsh=MWFyNTFhZHQ2d284bQ==" class="btn btn-outline-light m-1"
          target="_blank">Instagram</a>

        <!--buat WhasApp-->
        <a href="https://wa.me/6285167935226" class="btn btn-outline-light m-1" target="_blank">WhatsApp</a>
        </a>

        <!--buat Email-->
        <a href="mailto:hellonexoraa@gmail.com" class="btn btn-outline-light m-1" target="_blank">Email</a>
      </div>

      <div class="text-center my-3">
        <p id="tekskenalan">kalau kamu udah follow kami, <strong>klik ORACLE </strong>sekarang juga!</p>

        <!--JS ubah teks jadi kalo di klik teksnya berganti dgn custom pakai onclick-->
        <!--mt margin top
        warning = klas warna di boostrap CSS-->
        <button onclick="ubahteks()" class="btn btn-warning mt-3">ORACLE</button>

        <!--JS fungsi kalau di klik kluar elemen atau teks yang di custom-->
        <script>
          function ubahteks() {
            document.getElementById("tekskenalan").innerText =
              "Selamat! Kamu mendapat diskon 20%. Ketik 'DEVRIES' untuk klaim saat kolaborasi.";
          }
        </script>
      </div>
    </div>
  </div>
  <button onclick="scrollToTop()" id="backToTopBtn" title="Kembali ke Atas">
    <img src="assets/upload.png" alt="arrow up">
  </button>

  <!-- Footer -->
  <footer class="footerstyle">
    &copy;2025 NEXORA. ALL RIGHTS RESERVED.
    <br>TERMS OF USE | ADDITIONAL CONTENT INFORMATION | PRIVACY POLICE |
    <br>OUR STATE PRIVACY RIGHTS | CHILDREN'S ONLINE PRIVACY | INTEREST-BASED ADS |
    <br>DO NOT SELL OR SHARE OUR PERSONAL INFORMATION
  </footer>

  <!-- Code JS bootstrap buat fitur aktif yang sebelumya (carousel, navbar toogle dll)-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>