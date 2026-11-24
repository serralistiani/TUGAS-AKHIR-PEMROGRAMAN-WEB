
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.getElementById("navMenu");

if (menuToggle && navMenu) {

    menuToggle.addEventListener("click", function () {
        navMenu.classList.toggle("show");
    });

    const navLinks = navMenu.querySelectorAll("a");

    navLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            navMenu.classList.remove("show");
        });
    });

}
