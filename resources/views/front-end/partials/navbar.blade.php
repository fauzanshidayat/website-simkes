<!-- Navbar -->
<nav
    class="w-full flex items-center justify-between px-6 md:px-20 py-4 bg-[#067344] shadow-lg fixed top-0 z-50 sr-title sr-hidden">
    <div class="flex items-center space-x-3">
        <img alt="Logo Pondok Pesantren Modern Nurul Alami, stylized letters NA in futuristic style" class="w-12 h-12"
            src="{{ asset('assets/img/logo nurul alami.png') }}" />
        <span class="text-2xl font-bold tracking-wide text-white">Nurul Alami</span>
    </div>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-8 font-semibold text-lg text-white">
        <li>
            <a class="hover:text-[#FFBB00] transition" href="{{ route('home') }}">Home</a>
        </li>

        <!-- Profil -->
        <li class="relative">
            <a href="#"
            class="hover:text-[#FFBB00] transition inline-flex items-center gap-1"
            onmouseover="this.nextElementSibling.classList.remove('invisible','opacity-0')"
            onmouseout="this.nextElementSibling.classList.add('invisible','opacity-0')">
                Profil
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div
                class="absolute left-0 top-full mt-2 w-44 bg-white text-black rounded shadow-lg 
                    invisible opacity-0 transition-all duration-200 z-50"
                onmouseover="this.classList.remove('invisible','opacity-0')"
                onmouseout="this.classList.add('invisible','opacity-0')">
                <a href="{{ route('sejarah') }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a>
                <a href="{{ route('visi-misi') }}" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
            </div>
        </li>

        <!-- Pendidikan -->
        <li class="relative">
            <a href="#"
            class="hover:text-[#FFBB00] transition inline-flex items-center gap-1"
            onmouseover="this.nextElementSibling.classList.remove('invisible','opacity-0')"
            onmouseout="this.nextElementSibling.classList.add('invisible','opacity-0')">
                Pendidikan
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div
                class="absolute left-0 top-full mt-2 w-40 bg-white text-black rounded shadow-lg 
                    invisible opacity-0 transition-all duration-200 z-50"
                onmouseover="this.classList.remove('invisible','opacity-0')"
                onmouseout="this.classList.add('invisible','opacity-0')">
                <a href="{{ route('madrasah-tsanawiyah') }}" class="block px-4 py-2 hover:bg-gray-100">MTS</a>
                <a href="{{ route('madrasah-aliyah') }}" class="block px-4 py-2 hover:bg-gray-100">MA</a>
            </div>
        </li>

        <!-- Galery -->
        <li class="relative">
            <a href="#"
            class="hover:text-[#FFBB00] transition inline-flex items-center gap-1"
            onmouseover="this.nextElementSibling.classList.remove('invisible','opacity-0')"
            onmouseout="this.nextElementSibling.classList.add('invisible','opacity-0')">
                Galery
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div
                class="absolute left-0 top-full mt-2 w-40 bg-white text-black rounded shadow-lg 
                    invisible opacity-0 transition-all duration-200 z-50"
                onmouseover="this.classList.remove('invisible','opacity-0')"
                onmouseout="this.classList.add('invisible','opacity-0')">
                <a href="{{ route('foto.index') }}" class="block px-4 py-2 hover:bg-gray-100">Foto</a>
                <a href="{{ route('video.index') }}" class="block px-4 py-2 hover:bg-gray-100">Video</a>
            </div>
        </li>

        <!-- Informasi -->
        <li class="relative">
            <a href="#"
            class="hover:text-[#FFBB00] transition inline-flex items-center gap-1"
            onmouseover="this.nextElementSibling.classList.remove('invisible','opacity-0')"
            onmouseout="this.nextElementSibling.classList.add('invisible','opacity-0')">
                Informasi
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <div
                class="absolute left-0 top-full mt-2 w-40 bg-white text-black rounded shadow-lg 
                    invisible opacity-0 transition-all duration-200 z-50"
                onmouseover="this.classList.remove('invisible','opacity-0')"
                onmouseout="this.classList.add('invisible','opacity-0')">
                <a href="{{ route('berita.index') }}" class="block px-4 py-2 hover:bg-gray-100">Berita & Artikel</a>
                <a href="{{ route('pengumuman.index') }}" class="block px-4 py-2 hover:bg-gray-100">Pengumuman</a>
                <a href="https://simkes.nurulalami.sch.id/" target="_blank" class="block px-4 py-2 hover:bg-gray-100">SIMKES</a>
                <a href="https://shorturl.at/BYi5I" target="_blank" class="block px-4 py-2 hover:bg-gray-100">PSB</a>
                <a href="{{ route('ikppm-na') }}" class="block px-4 py-2 hover:bg-gray-100">IKPPM-NA</a>
            </div>
        </li>

        <!-- Contact -->
        <li>
            <a class="hover:text-[#FFBB00] transition" href="#contact">Contact</a>
        </li>
    </ul>
   <!-- Hamburger -->
  <button class="md:hidden focus:outline-none text-white" id="menu-btn">
    <i class="fas fa-bars text-2xl"></i>
  </button>
</nav>
<!-- Mobile Menu -->
<div id="mobile-menu"
     class="hidden fixed top-16 left-0 w-full bg-[#067344] shadow-lg z-40 md:hidden 
            overflow-hidden transition-all duration-500 ease-in-out max-h-0">
  <ul class="flex flex-col space-y-4 p-6 font-semibold text-lg text-white">
    <li>
      <a class="block hover:text-[#FFBB00] transition" href="{{ route('home') }}">Home</a>
    </li>

    <!-- Dropdown Profil -->
    <li>
      <button
        class="w-full text-left hover:text-[#FFBB00] transition flex justify-between items-center dropdown-btn"
        onclick="toggleDropdownMobile(this)" type="button">
        Profil
        <svg class="w-4 h-4 transform transition-transform duration-300 dropdown-icon"
             fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="hidden mt-2 ml-4 space-y-2 dropdown-menu">
        <li><a href="{{ route('sejarah') }}" class="block hover:text-[#FFBB00] transition">Sejarah</a></li>
        <li><a href="{{ route('visi-misi') }}" class="block hover:text-[#FFBB00] transition">Visi & Misi</a></li>
      </ul>
    </li>

    <!-- Dropdown Pendidikan -->
    <li>
      <button
        class="w-full text-left hover:text-[#FFBB00] transition flex justify-between items-center dropdown-btn"
        onclick="toggleDropdownMobile(this)" type="button">
        Pendidikan
        <svg class="w-4 h-4 transform transition-transform duration-300 dropdown-icon"
             fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="hidden mt-2 ml-4 space-y-2 dropdown-menu">
        <li><a href="{{ route('madrasah-tsanawiyah') }}" class="block hover:text-[#FFBB00] transition">MTS</a></li>
        <li><a href="{{ route('madrasah-aliyah') }}" class="block hover:text-[#FFBB00] transition">MA</a></li>
      </ul>
    </li>

    <!-- Dropdown Galery -->
    <li>
      <button
        class="w-full text-left hover:text-[#FFBB00] transition flex justify-between items-center dropdown-btn"
        onclick="toggleDropdownMobile(this)" type="button">
        Galery
        <svg class="w-4 h-4 transform transition-transform duration-300 dropdown-icon"
             fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="hidden mt-2 ml-4 space-y-2 dropdown-menu">
        <li><a href="{{ route('foto.index') }}" class="block hover:text-[#FFBB00] transition">Foto</a></li>
        <li><a href="{{ route('video.index') }}" class="block hover:text-[#FFBB00] transition">Video</a></li>
      </ul>
    </li>

    <!-- Dropdown Informasi -->
    <li>
      <button
        class="w-full text-left hover:text-[#FFBB00] transition flex justify-between items-center dropdown-btn"
        onclick="toggleDropdownMobile(this)" type="button">
        Informasi
        <svg class="w-4 h-4 transform transition-transform duration-300 dropdown-icon"
             fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="hidden mt-2 ml-4 space-y-2 dropdown-menu">
        <li><a href="{{ route('berita.index') }}" class="block hover:text-[#FFBB00] transition">Berita & Artikel</a></li>
        <li><a href="{{ route('pengumuman.index') }}" class="block hover:text-[#FFBB00] transition">Pengumuman</a></li>
        <li><a href="https://simkes.nurulalami.sch.id/" target="_blank" class="block hover:text-[#FFBB00] transition">SIMKES</a></li>
        <li><a href="https://shorturl.at/BYi5I" target="_blank" class="block hover:text-[#FFBB00] transition">PSB</a></li>
        <li><a href="{{ route('ikppm-na') }}" class="block hover:text-[#FFBB00] transition">IKPPM-NA</a></li>
      </ul>
    </li>

    <!-- Contact -->
    <li>
      <a class="block hover:text-[#FFBB00] transition" href="#contact">Contact</a>
    </li>
  </ul>
</div>

