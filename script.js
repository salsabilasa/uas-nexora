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