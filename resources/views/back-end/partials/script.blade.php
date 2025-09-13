<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<script>
    const userMenuButton = document.getElementById("userMenuButton");
    const userDropdown = document.getElementById("userDropdown");

    // Toggle dropdown visibility
    userMenuButton.addEventListener("click", () => {
        userDropdown.classList.toggle("hidden");
    });

    // Optional: Close dropdown if clicked outside
    window.addEventListener("click", (e) => {
        if (
            !userMenuButton.contains(e.target) &&
            !userDropdown.contains(e.target)
        ) {
            userDropdown.classList.add("hidden");
        }
    });
</script>

<script>
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
    const overlay = document.getElementById("overlay");

    function openSidebar() {
        sidebar.classList.remove("-translate-x-full");
        overlay.classList.remove("hidden");
        document.body.style.overflow = "hidden";
    }

    function closeSidebar() {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
        document.body.style.overflow = "";
    }

    sidebarToggle.addEventListener("click", () => {
        if (sidebar.classList.contains("-translate-x-full")) {
            openSidebar();
        } else {
            closeSidebar();
        }
    });

    overlay.addEventListener("click", () => {
        closeSidebar();
    });

    // Close sidebar on window resize if desktop
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove("-translate-x-full");
            overlay.classList.add("hidden");
            document.body.style.overflow = "";
        } else {
            sidebar.classList.add("-translate-x-full");
        }
    });
</script>
