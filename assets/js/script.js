
// Mengambil elemen tombol menu
const menuToggle = document.getElementById("menuToggle");

// Mengambil elemen navigasi
const navMenu = document.getElementById("navMenu");

// Membuka dan menutup menu
menuToggle.addEventListener("click", function () {
    navMenu.classList.toggle("show");
});

// Menutup menu setelah link diklik
const navLinks = document.querySelectorAll(".nav-menu a");

navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
        navMenu.classList.remove("show");
    });
});
