<?php
require 'includes/config.php';
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketplace Nexora</title>
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
                    <li class="nav-item"><a class="nav-link" href="liberahosting.php">Libera Hosting</a></li>
                    <li class="nav-item"><a class="nav-link active" href="marketplace.php">Marketplace War</a></li>
                    <li class="nav-item"><a class="nav-link" href="collab.php">Collaboration Arena</a></li>
                    <li class="nav-item"><a class="nav-link" href="classkill.php">Skill Up Lab</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us?</a></li>

                    <?php if (is_logged_in()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#">Hi,
                            <?= htmlspecialchars($_SESSION['username']) ?>
                        </a>
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
        <img src="assets/logo nexora.png" alt="Foto Profil" width="500px" height="500px" />
    </div>

    <div class="container">
        <p>
            <center>
                <h1><strong>MARKETPLACE WAR</strong></h1>
        </p>
        <h3>Where Creations Compete, and Wallets Vote</center>
        </h3>

        <p>Di Nexora, karya bukan sekadar portofolio — ia adalah senjata.Marketplace kami bukan cuma lapak
            digital, tapi arena terbuka tempat para kreator muda bertarung, unjuk gigi, dan memperjuangkan namanya.</p>

        <p>Setiap hari, medan ini dipenuhi desain logo yang bikin iri brand besar,
            aset game yang tampak seperti buatan studio luar negeri,
            dan template YouTube yang langsung naik trending. Tapi ini bukan soal siapa paling murah.
            Bukan juga soal siapa punya koneksi luas.
            Ini soal impact.
            Siapa yang bisa menyihir pengguna dalam 3 detik?
            Siapa yang bisa bikin mereka klik tombol “beli” tanpa ragu?</p>

        <p>Di sinilah kamu diuji — bukan oleh juri di balik layar,
            tapi oleh sesama kreator, pengguna nyata, dan komunitas yang tahu betul berapa banyak keringat
            dibalik satu karya yang kelihatan simpel. Dari battle rating mingguan, quick clash bertema acak, sampai
            sales duel yang memanas — Marketplace War di Nexora adalah panggung utama
            bagi siapa pun yang berani memperjuangkan karyanya di hadapan dunia. Karena di sini, kamu nggak cuma
            jualan.
            Kamu bertarung demi gaya, pengaruh, dan masa depan digitalmu.</p>

        <!-- Footer -->

        <footer class="custom-tagline">
            <p>&copy; 2025 NEXORA. ALL RIGHTS RESERVED.
                <br>>TERMS OF USE | ADDITIONAL CONTENT INFORMATION | PRIVACY POLICE |
                <br>US STATE PRIVACY RIGHTS | CHILDREN'S ONLINE PRIVACY | INTEREST-BASED ADS |
                <br>DO NOT SELL OR SHARE MY PERSONAL INFORMATION
        </footer>

        <!-- untuk isi Projek atau instansi -->
        <!--id buat narik bootsrap untuk kartu card bagian daftar aktif-->
        <div class="container mb-5" id="projek">
            <br>
            <p></p>

            <!--MULAI DISINIIIIII-->
            <div class="text-center my-5">
                <h1><strong>NEW UP COMING</strong></h1>
            </div>

            <div class="row g-4">
                <!-- CARD 1 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft tumbler.jpg" card-img-top" alt="CUSTOM SKIN MENECRAFT">

                        <div class="card-body text-start">
                            <h5 class="card-title">CUSTOM SKIN MINECRAFT</h5>
                            <p class="card-text">Kadang orang beli baju biar keren. Kami? Bikin baju buat
                                karakter piksel. Di sinilah kmai jadi semacam penjahit digital untuk para petualang
                                Minecraft. Custom Skin bukan cuma soal mengganti warna baju — ini soal identitas.
                                Superhero? Ksatria? Creeper berjas? You name it. Kami bikin dari nol, pake gaya tangan
                                sendiri, dan pastinya bisa bikin karaktermu jadi pusat perhatian di server mana pun.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/war minecraft.jpg" class="card-img-top" alt="Hosting Server Minecraft">

                        <div class="card-body text-start">
                            <h5 class="card-title">HOSTING SERVER MINECRAFT</h5>
                            <p class="card-text">Pernah mimpi punya dunia sendiri dan ngajak temen-temen
                                main bareng? Aku mewujudkannya. Hosting Server Minecraft-ku bukan server sembarangan —
                                dia seperti markas rahasia dengan teknologi yang cukup kuat buat tahan serangan zombie,
                                creeper, dan teman toxic yang suka griefing. Stabil, cepat, dan selalu aktif. Aku juga
                                jadi “dewa dunia” di balik layar, ngurus plugin, backup, sampai bikin custom rules.
                                Aman, nyaman, dan bikin betah.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft1181.jpeg" class="card-img-top" alt="Minecraft Java & Bedrock">

                        <div class="card-body text-start">
                            <h5 class="card-title">MINECRAFT JAVA & BEDROCK (FOR PC OFFICIAL)</h5>
                            <p class="card-text">Dunia dua semesta. Satu sisi Java, sisi lain Bedrock. Dua
                                platform, satu tujuan: bikin dunia dari balok-balok piksel. Aku bantu kamu install,
                                setting, bahkan kasih tips rahasia biar bisa main di server favorit. Entah kamu anak
                                original atau tim crack-an, semua bisa nyemplung ke dunia kotak-kotak ini tanpa drama
                                teknis.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft marketplace.jpeg" class="card-img-top"
                            alt="Crack Installer Minecraft">

                        <div class="card-body text-start">

                            <h5 class="card-title">MINECRAFT JAVA BEDROCK ( INSTALLER & OFFICIAL)</h5>
                            <p class="card-text">Versi khusus buat yang pengen langsung gas main tapi ogah
                                ribet install. Installer udah aku sulap jadi portal instan — tinggal klik, pasang,
                                dan... boom! Kamu udah bisa crafting di dunia survival atau bikin kota terapung di
                                creative mode.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/Minecraft Thumbnail.jpg" class="card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">MINECRAFT SERVER JAVA EDITION</h5>
                            <p class="card-text">Kalau kamu penguasa dunia dan pengen ngundang temen-temen
                                buat nginap di realmmu sendiri, ini dia tempatnya. Server Java Edition yang aku sediakan
                                full kontrol, bebas mod, dan gak gampang down. Buat kamu yang serius bangun dunia (dan
                                gak pengen jadi korban lag).</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft traders.jpeg" class="card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">MINECRAFT SERVER BEDROCK EDITION</h5>
                            <p class="card-text">Versi server buat para penjelajah mobile & Windows 10.
                                Cepat, ringan, dan stabil, cocok buat kamu yang main dari HP tapi pengen ngerasain
                                sensasi dunia besar yang diatur sendiri. Aku bantu setup dari awal sampai online —
                                tinggal main, no pusing-pusing.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 7 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft all aduancements.jpeg" card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">MINECRAFT SERVER RAM UP TO 32 GB</h5>
                            <p class="card-text">Ini bukan server biasa, ini raksasa. Buat kamu yang mau
                                main pake 100+ plugin, shader seberat dewa, atau bikin map seluas benua. Server ini bisa
                                kamu kustom penuh — dan kalau kamu nyasar, tenang, aku pandu balik ke jalan terang.

                            </p>
                        </div>
                    </div>
                </div>

                <!-- CARD 8 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft pvp.jpg" class="card-img-top" alt="Crack Installer Minecraft">

                        <div class="card-body text-start">

                            <h5 class="card-title">CUSTOM ADDON / MOD</h5>
                            <p class="card-text">Bos-bosan sama vanilla? Aku bantu kamu bumbui
                                petualanganmu. Custom addon dan mod yang aku buat bisa nambah mobs, tools, UI, atau
                                bahkan skill baru. Cocok buat kamu yang pengen Minecraft rasa RPG, horror, atau apa pun
                                yang liar. Total kontrol di tanganmu.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 9 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft 27.jpeg" class="card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">CUSTOM MAPS (SURVIVAL / ADVENTURE)</h5>
                            <p class="card-text">Males bikin map tapi pengen main di dunia keren? Sini,
                                aku buatin. Dari tantangan parkour sadis, petualangan naratif penuh twist, sampai map
                                survival dengan resource langka — semua bisa request. Tinggal main dan rasakan dunia
                                yang kubikin dari imajinasi liar.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 10 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft red.jpeg" class="card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">CUSTOM UI / RESOURCES PACK</h5>
                            <p class="card-text">Pengen Minecraft kamu tampil beda? Aku bisa sulap
                                tampilannya jadi lebih modern, klasik, atau bahkan nyeleneh (kucing jadi creeper, siapa
                                takut?). Semua elemen UI bisa disesuaikan sesuai request. Minecraft versi kamu, tampil
                                beda.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 11 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/minecraft barwione.jpeg" class="card-img-top" alt="">

                        <div class="card-body text-start">
                            <h5 class="card-title">CUSTOM SOUND / TEXTURE PACK</h5>
                            <p class="card-text">Suara dan tampilan dunia kamu mulai ngebosenin? Aku bisa
                                ganti semuanya — dari langkah kaki sampai backsound-nya. Mau bikin Minecraft rasa
                                cyberpunk atau Jawa kuno? Bisa. Suara ayam jadi suara robot? Bisa juga. Dunia barumu
                                dimulai dari sini.</p>
                        </div>
                    </div>
                </div>

                <!-- CARD 12 -->
                <div class="col-sm-6 col-lg-4 hover-scale">
                    <div class="card h-100 shadow">

                        <img src="assets/war minecraft.jpg" class="card-img-top" alt="Crack Installer Minecraft">

                        <div class="card-body text-start">

                            <h5 class="card-title">CUSTOM ADDON / MOD</h5>
                            <p class="card-text">Bos-bosan sama vanilla? Aku bantu kamu bumbui
                                petualanganmu. Custom addon dan mod yang aku buat bisa nambah mobs, tools, UI, atau
                                bahkan skill baru. Cocok buat kamu yang pengen Minecraft rasa RPG, horror, atau apa pun
                                yang liar. Total kontrol di tanganmu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="scrollToTop()" id="backToTopBtn" title="Kembali ke Atas">
        <img src="assets/upload.png" alt="arrow up">
    </button>
    <footer class="footerstyle">
        &copy;2025 NEXORA. ALL RIGHTS RESERVED.
        <br>TERMS OF USE | ADDITIONAL CONTENT INFORMATION | PRIVACY POLICE |
        <br>US STATE PRIVACY RIGHTS | CHILDREN'S ONLINE PRIVACY | INTEREST-BASED ADS |
        <br>DO NOT SELL OR SHARE MY PERSONAL INFORMATION
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>