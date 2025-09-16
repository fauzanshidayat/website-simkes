<!-- Load libraries dari CDN -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    // ===============================
    // Preloader dan ScrollReveal
    // ===============================
    const preloader = document.getElementById("preloader");

    if (preloader) {
        // Mulai fade-out preloader
        preloader.classList.add("opacity-0", "transition-opacity", "duration-500");

        setTimeout(() => {
            preloader.style.display = "none";

            // Inisialisasi ScrollReveal
            const sr = ScrollReveal({
                distance: "40px",
                duration: 800,
                easing: "ease-in-out",
                reset: false,
                mobile: true,
                viewFactor: 0.15,
                cleanup: true,
            });

            // Helper: reveal hanya jika elemen ada
            function revealIfExist(selector, options = {}) {
                const el = document.querySelector(selector);
                if (el) {
                   sr.reveal(selector, {
                            ...options,
                            beforeReveal: (el) => el.classList.remove("sr-hidden"),
                            afterReveal: (el) => el.style.transform = "" // reset transform agar hover scale jalan
                        });
                    }
            }

            // Panggil untuk semua elemen
            revealIfExist(".hero-text", { origin: "left" });
            revealIfExist(".hero-img", { origin: "right" });
            revealIfExist(".about-text", { origin: "top" });
            revealIfExist(".about-img", { origin: "bottom" });
            revealIfExist(".sr-title", { origin: "top" });
            revealIfExist(".sr-box", { origin: "bottom", interval: 200 });
        }, 500);
    }

    // ===============================
    // Typed.js
    // ===============================
    const typedEl = document.getElementById("element");
    if (typedEl) {
        new Typed("#element", {
            strings: ["Modern Nurul Alami."],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });
    }

    // ===============================
    // Hamburger menu
    // ===============================
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // ===============================
    // Dropdown mobile menu
    // ===============================
    window.toggleDropdownMobile = function(button) {
        const dropdown = button.nextElementSibling;
        const icon = button.querySelector(".dropdown-icon");

        if (dropdown) dropdown.classList.toggle("hidden");
        if (icon) icon.classList.toggle("rotate-180");
    }
});
</script>

<style>
/* Semua elemen animasi awal disembunyikan */
.sr-hidden {
    opacity: 0;
    visibility: hidden;
}

/* Animasi slide down untuk mobile menu (opsional) */
@keyframes slideDown {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-slide-down {
    animation: slideDown 0.3s ease-out;
}
</style>
