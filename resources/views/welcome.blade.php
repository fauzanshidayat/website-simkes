<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900 min-h-screen flex flex-col">
    <div id="app" class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-30 w-64 bg-[#067344] text-white transform -translate-x-full md:translate-x-0 md:static md:flex md:flex-col transition-transform duration-300 ease-in-out">
            <div class="flex items-center justify-center h-20 border-b border-white/20 flex-shrink-0">
                <img alt="Logo icon with white letters AD on green background" class="w-10 h-10 mr-3 rounded"
                    height="40"
                    src="https://storage.googleapis.com/a1aa/image/3ea4a732-8dfa-424b-4849-867be242a5c6.jpg"
                    width="40" />
                <h1 class="text-2xl font-semibold tracking-wide">Admin Panel</h1>
            </div>
            <nav class="flex-1 px-6 py-8 space-y-2 text-lg font-medium overflow-y-auto">
                <a aria-current="page"
                    class="flex items-center gap-3 py-3 px-4 rounded-lg bg-white text-[#067344] shadow-md transition-colors duration-300"
                    href="#">
                    <i class="fas fa-tachometer-alt"> </i>
                    Dashboard
                </a>
                <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                    href="#">
                    <i class="fas fa-users"> </i>
                    Users
                </a>
                <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                    href="#">
                    <i class="fas fa-box-open"> </i>
                    Products
                </a>
                <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                    href="#">
                    <i class="fas fa-chart-line"> </i>
                    Analytics
                </a>
                <a class="flex items-center gap-3 py-3 px-4 rounded-lg hover:bg-white hover:text-[#067344] transition-colors duration-300"
                    href="#">
                    <i class="fas fa-cogs"> </i>
                    Settings
                </a>
            </nav>
            <div class="px-6 py-4 border-t border-white/20 flex-shrink-0">
                <button
                    class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-white text-[#067344] font-semibold hover:bg-white/90 transition">
                    <i class="fas fa-sign-out-alt"> </i>
                    Logout
                </button>
            </div>
        </aside>
        <!-- Overlay for mobile when sidebar is open -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>
        <!-- Main content -->
        <main class="flex-1 bg-white p-6 md:p-10 overflow-y-auto min-h-screen">
            <header class="flex items-center justify-between mb-8 relative">
                <!-- Sidebar toggle for mobile -->
                <button aria-label="Toggle sidebar" id="sidebarToggle"
                    class="md:hidden text-[#067344] text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Page title -->
                <h2 class="text-3xl font-semibold text-[#067344]">Dashboard</h2>

                <!-- Right section -->
                <div class="flex items-center space-x-4 relative">
                    <!-- Search bar (hidden on mobile) -->
                    <div class="hidden md:block relative">
                        <input
                            class="border border-gray-300 rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-[#067344] focus:border-transparent"
                            placeholder="Search..." type="search" />
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>

                    <!-- Notifications button -->
                    <button aria-label="Notifications"
                        class="bg-[#067344] text-white rounded-full w-10 h-10 p-2 hover:bg-[#05592a] transition">
                        <i class="fas fa-bell"></i>
                    </button>

                    <!-- User button + dropdown -->
                    <div class="relative">
                        <button id="userMenuButton" aria-label="User menu"
                            class="bg-[#067344] text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-[#05592a] transition focus:outline-none">
                            <i class="fas fa-user-circle"></i>
                        </button>


                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Stats cards -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <i class="fas fa-users fa-2x"> </i>
                    </div>
                    <div>
                        <p class="text-sm uppercase font-semibold tracking-wide">Users</p>
                        <p class="text-3xl font-bold">1,245</p>
                        <p class="text-green-300 text-sm flex items-center gap-1">
                            <i class="fas fa-arrow-up"> </i>
                            5.4%
                        </p>
                    </div>
                </div>
                <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <i class="fas fa-shopping-cart fa-2x"> </i>
                    </div>
                    <div>
                        <p class="text-sm uppercase font-semibold tracking-wide">
                            Orders
                        </p>
                        <p class="text-3xl font-bold">3,876</p>
                        <p class="text-green-300 text-sm flex items-center gap-1">
                            <i class="fas fa-arrow-up"> </i>
                            8.1%
                        </p>
                    </div>
                </div>
                <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <i class="fas fa-dollar-sign fa-2x"> </i>
                    </div>
                    <div>
                        <p class="text-sm uppercase font-semibold tracking-wide">
                            Revenue
                        </p>
                        <p class="text-3xl font-bold">$24,560</p>
                        <p class="text-green-300 text-sm flex items-center gap-1">
                            <i class="fas fa-arrow-up"> </i>
                            12.3%
                        </p>
                    </div>
                </div>
                <div class="bg-[#067344] text-white rounded-lg p-6 shadow-lg flex items-center space-x-4">
                    <div class="p-4 bg-white bg-opacity-20 rounded-full">
                        <i class="fas fa-chart-line fa-2x"> </i>
                    </div>
                    <div>
                        <p class="text-sm uppercase font-semibold tracking-wide">
                            Growth
                        </p>
                        <p class="text-3xl font-bold">18.7%</p>
                        <p class="text-green-300 text-sm flex items-center gap-1">
                            <i class="fas fa-arrow-up"> </i>
                            3.9%
                        </p>
                    </div>
                </div>
            </section>
            <!-- Recent activity and users table -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Activity -->
                <div class="lg:col-span-1 bg-[#067344] text-white rounded-lg shadow-lg p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-6 border-b border-white/30 pb-2">
                        Recent Activity
                    </h3>
                    <ul class="space-y-4 overflow-y-auto max-h-[320px]">
                        <li class="flex items-start gap-4">
                            <img alt="Profile picture of John Doe, a young man with short brown hair and glasses, smiling"
                                class="w-12 h-12 rounded-full border-2 border-white" height="48"
                                src="https://storage.googleapis.com/a1aa/image/5c5d311c-5bc9-4abe-aa1f-1fa1b41b6014.jpg"
                                width="48" />
                            <div>
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-white/80">
                                    Added a new product to the catalog.
                                </p>
                                <p class="text-xs text-white/60">2 hours ago</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <img alt="Profile picture of Anna Smith, a woman with long black hair and a friendly smile"
                                class="w-12 h-12 rounded-full border-2 border-white" height="48"
                                src="https://storage.googleapis.com/a1aa/image/cdd72761-8704-4505-a2cf-323c9f4f3eb1.jpg"
                                width="48" />
                            <div>
                                <p class="font-semibold">Anna Smith</p>
                                <p class="text-sm text-white/80">
                                    Updated user permissions for 3 users.
                                </p>
                                <p class="text-xs text-white/60">5 hours ago</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <img alt="Profile picture of Michael Brown, a man with short curly hair and a beard"
                                class="w-12 h-12 rounded-full border-2 border-white" height="48"
                                src="https://storage.googleapis.com/a1aa/image/10f9115c-b024-4aa8-f222-f81c45aa6632.jpg"
                                width="48" />
                            <div>
                                <p class="font-semibold">Michael Brown</p>
                                <p class="text-sm text-white/80">
                                    Completed monthly sales report.
                                </p>
                                <p class="text-xs text-white/60">1 day ago</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <img alt="Profile picture of Lisa Chen, a woman with medium-length straight hair and glasses"
                                class="w-12 h-12 rounded-full border-2 border-white" height="48"
                                src="https://storage.googleapis.com/a1aa/image/a3171b01-cc63-4d6e-1a76-de461d0cd402.jpg"
                                width="48" />
                            <div>
                                <p class="font-semibold">Lisa Chen</p>
                                <p class="text-sm text-white/80">
                                    Added 10 new users to the system.
                                </p>
                                <p class="text-xs text-white/60">2 days ago</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <img alt="Profile picture of Robert Williams, a man with short gray hair and a friendly smile"
                                class="w-12 h-12 rounded-full border-2 border-white" height="48"
                                src="https://storage.googleapis.com/a1aa/image/622ce2c7-1fe3-48e0-9561-4864fc67de92.jpg"
                                width="48" />
                            <div>
                                <p class="font-semibold">Robert Williams</p>
                                <p class="text-sm text-white/80">
                                    Changed system settings and updated security protocols.
                                </p>
                                <p class="text-xs text-white/60">3 days ago</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Users Table -->
                <div class="lg:col-span-2 bg-white rounded-lg shadow-lg p-6 overflow-x-auto">
                    <h3 class="text-[#067344] text-xl font-semibold mb-6 border-b border-gray-200 pb-2">
                        Users
                    </h3>
                    <table class="min-w-full text-left text-gray-700">
                        <thead class="border-b border-gray-300">
                            <tr>
                                <th class="py-3 px-4 font-semibold">Name</th>
                                <th class="py-3 px-4 font-semibold">Email</th>
                                <th class="py-3 px-4 font-semibold">Role</th>
                                <th class="py-3 px-4 font-semibold">Status</th>
                                <th class="py-3 px-4 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img alt="Profile picture of John Doe, a young man with short brown hair and glasses"
                                        class="w-8 h-8 rounded-full" height="32"
                                        src="https://storage.googleapis.com/a1aa/image/1dec9ce0-d66f-4617-976b-659ba20c2826.jpg"
                                        width="32" />
                                    John Doe
                                </td>
                                <td class="py-3 px-4">john.doe@example.com</td>
                                <td class="py-3 px-4">Administrator</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="py-3 px-4 space-x-3">
                                    <button aria-label="Edit John Doe" class="text-[#067344] hover:text-[#05592a]">
                                        <i class="fas fa-edit"> </i>
                                    </button>
                                    <button aria-label="Delete John Doe" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash-alt"> </i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img alt="Profile picture of Anna Smith, a woman with long black hair and a friendly smile"
                                        class="w-8 h-8 rounded-full" height="32"
                                        src="https://storage.googleapis.com/a1aa/image/cdd72761-8704-4505-a2cf-323c9f4f3eb1.jpg"
                                        width="32" />
                                    Anna Smith
                                </td>
                                <td class="py-3 px-4">anna.smith@example.com</td>
                                <td class="py-3 px-4">Editor</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Pending
                                    </span>
                                </td>
                                <td class="py-3 px-4 space-x-3">
                                    <button aria-label="Edit Anna Smith" class="text-[#067344] hover:text-[#05592a]">
                                        <i class="fas fa-edit"> </i>
                                    </button>
                                    <button aria-label="Delete Anna Smith" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash-alt"> </i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img alt="Profile picture of Michael Brown, a man with short curly hair and a beard"
                                        class="w-8 h-8 rounded-full" height="32"
                                        src="https://storage.googleapis.com/a1aa/image/10f9115c-b024-4aa8-f222-f81c45aa6632.jpg"
                                        width="32" />
                                    Michael Brown
                                </td>
                                <td class="py-3 px-4">michael.brown@example.com</td>
                                <td class="py-3 px-4">Contributor</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="py-3 px-4 space-x-3">
                                    <button aria-label="Edit Michael Brown"
                                        class="text-[#067344] hover:text-[#05592a]">
                                        <i class="fas fa-edit"> </i>
                                    </button>
                                    <button aria-label="Delete Michael Brown" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash-alt"> </i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img alt="Profile picture of Lisa Chen, a woman with medium-length straight hair and glasses"
                                        class="w-8 h-8 rounded-full" height="32"
                                        src="https://storage.googleapis.com/a1aa/image/a3171b01-cc63-4d6e-1a76-de461d0cd402.jpg"
                                        width="32" />
                                    Lisa Chen
                                </td>
                                <td class="py-3 px-4">lisa.chen@example.com</td>
                                <td class="py-3 px-4">Administrator</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        Inactive
                                    </span>
                                </td>
                                <td class="py-3 px-4 space-x-3">
                                    <button aria-label="Edit Lisa Chen" class="text-[#067344] hover:text-[#05592a]">
                                        <i class="fas fa-edit"> </i>
                                    </button>
                                    <button aria-label="Delete Lisa Chen" class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash-alt"> </i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img alt="Profile picture of Robert Williams, a man with short gray hair and a friendly smile"
                                        class="w-8 h-8 rounded-full" height="32"
                                        src="https://storage.googleapis.com/a1aa/image/622ce2c7-1fe3-48e0-9561-4864fc67de92.jpg"
                                        width="32" />
                                    Robert Williams
                                </td>
                                <td class="py-3 px-4">robert.williams@example.com</td>
                                <td class="py-3 px-4">Editor</td>
                                <td class="py-3 px-4">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="py-3 px-4 space-x-3">
                                    <button aria-label="Edit Robert Williams"
                                        class="text-[#067344] hover:text-[#05592a]">
                                        <i class="fas fa-edit"> </i>
                                    </button>
                                    <button aria-label="Delete Robert Williams"
                                        class="text-red-600 hover:text-red-800">
                                        <i class="fas fa-trash-alt"> </i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
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
</body>

</html>
