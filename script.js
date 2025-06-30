// Fungsi untuk menampilkan tombol setelah scroll ke bawah 20px
window.onscroll = function () {
  toggleBackToTopButton();
};

function toggleBackToTopButton() {
  const backToTopBtn = document.getElementById("backToTopBtn");
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// Fungsi untuk scroll ke atas saat tombol diklik
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

// input nama pengunjung buat sapa otomatis dengan JS
function kenalanDulu() {
  let nama = prompt(
    "Siapa namamu, sang calon kreator legendaris? Kami janji enggak bakal pakai namamu untuk mantra gelap. Cuma buat satu hal, biar kami bisa menyapamu dengan cara yang lebih hangat. Ayo isi nama kamu, dan kita mulai petualangan digital ini bareng-bareng!"
  );
  if (nama) {
    document.getElementById("ucapanSelamat").innerText = "Halo, " + nama + "!";
  } else {
    document.getElementById("ucapanSelamat").innerText =
      "Halo juga! Jangan lupa kenalan, ya!";
  }
}

// buat bikin notip sebelum semua link terbuka
//JS ngambil semua elemen link dan nyimpan di variabel link, jadi setiap mau pindah tab atau klik link yang ngarahin ketab langsung muncul pesan
const smuaLink = document.querySelectorAll("a");

// Loop semua link, karena biar sekaligus
smuaLink.forEach(function (link) {
  link.addEventListener("click", function (event) {
    event.preventDefault(); // Cegah langsung pergi ke link

    // untuk munculin pesan alert, ketiknya disini
    alert("kamu akan mengarah ke halaman lain. klik OK jika setuju");

    // nanti kalo klik OK dari pesan pop up, baru bisa lanjut ke link otomatis
    window.location.href = this.href;
  });
});

// buat nampilin pesan pop upnya
function sapaDilla() {
  alert(
    "Vitamin Claimed. Mimpi? Dibungkus. Next stop: Bikin semua orang bilang, ‘Kok dia bisa sekeren itu?‘"
  );
}
