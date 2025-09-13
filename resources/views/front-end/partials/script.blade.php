<!-- Load library from the CDN -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');

        // Tambahkan class 'sr-hidden' dulu supaya tidak langsung muncul
        document.querySelector('.hero-text')?.classList.add('sr-hidden');
        document.querySelector('.hero-img')?.classList.add('sr-hidden');
        document.querySelector('.about-text')?.classList.add('sr-hidden');
        document.querySelector('.about-img')?.classList.add('sr-hidden');
        document.querySelector('.sr-title')?.classList.add('sr-hidden');
        document.querySelector('.sr-box')?.classList.add('sr-hidden');

        if (preloader) {
            preloader.classList.add('opacity-0', 'transition-opacity', 'duration-500');

            setTimeout(() => {
                preloader.style.display = 'none';

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

                sr.reveal(".hero-text", {
                    origin: "left",
                    opacity: 0,
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden'); // Tampilkan sebelum animasi
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    }
                });

                sr.reveal(".hero-img", {
                    origin: "right",
                    opacity: 0,
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden'); // Tampilkan sebelum animasi
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    }
                });

                // Reveal untuk about-text dari atas
                sr.reveal(".about-text", {
                    origin: "top",
                    opacity: 0,
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden');
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    }
                });

                // Reveal untuk about-img dari bawah
                sr.reveal(".about-img", {
                    origin: "bottom",
                    opacity: 0,
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden');
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    }
                });

                // Reveal untuk title (misalnya judul section)
                sr.reveal(".sr-title", {
                    origin: "top",
                    opacity: 0,
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden');
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    }
                });

                // Reveal untuk box-box (misal seperti fitur, program, dsb)
                sr.reveal(".sr-box", {
                    origin: "bottom",
                    opacity: 0,
                    interval: 200, // supaya muncul satu per satu
                    beforeReveal: (el) => {
                        el.classList.remove('sr-hidden');
                    },
                    afterReveal: (el) => {
                        el.style.opacity = '1';
                        el.style.transform = '';
                    }
                });

            }, 500);
        }
    });
</script>

<!-- Setup and start animation! -->
<script>
    var typed = new Typed("#element", {
        strings: ["Modern Nurul Alami."],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
    });
</script>
<script>
    // Toggle mobile menu (pastikan tombol dengan id="menu-btn" ada di halaman)
    document.getElementById("menu-btn").addEventListener("click", () => {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });

    // Toggle dropdown menu di mobile dengan tombol yang diklik
    function toggleDropdownMobile(button) {
        const dropdown = button.nextElementSibling; // elemen ul berikutnya
        const icon = button.querySelector(".dropdown-icon"); // svg ikon panah

        if (dropdown && icon) {
            dropdown.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        }
    }
</script>
