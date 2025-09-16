<html lang="en">

@include('front-end.partials.header')

<body>
    <!-- Preloader fullscreen -->
    <div id="preloader" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center">
        <div class="w-12 h-12 border-4 border-green-700 border-t-transparent rounded-full animate-spin"></div>
    </div>
    @include('front-end.partials.navbar')

    <main class="flex-grow pt-20">
        @yield('content')
        <!-- Contact Section -->
        <section class="px-6 md:px-20 py-20  text-white text-center bg-[#067344] " id="contact">

            <div class="max-w-6xl mx-auto grid md:grid-cols-1 lg:grid-cols-4 gap-8 text-white text-left">
                <!-- Kolom 1: Info Pondok -->
                <div class="sr-box">
                    <h3 class="text-xl font-bold mb-4 text-white">PPM Nurul ALami</h3>
                    <p class="mb-2">
                        <strong>Alamat:</strong><br />
                        Kp. Panyaweyan, RT.009/RW.003, Des. Dahu,<br />
                        Kec. Cikeusal, Kab. Serang - Prov. Banten
                    </p>
                    <p class="mb-2"><strong>Phone:</strong>+62 822-4905-4640</p>
                    <p class="mb-4"><strong>Email:</strong> info@nurulalami.sch.id</p>
                    <div class="flex space-x-4 text-xl text-white">
                        <a href="https://www.facebook.com/ppmnurulalami" target = "_blank" class="hover:text-[#FFBB00]"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/ppmnurulalami99.official/" target = "_blank" class="hover:text-[#FFBB00]"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@pondokpesantrenmodernnurul6560" target = "_blank" class="hover:text-[#FFBB00]"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Kolom 2: Link Terkait -->
                <div class="sr-box">
                    <h3 class="text-lg font-bold mb-4 text-white">Link Terkait</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('sejarah') }}" class="hover:text-[#FFBB00]">Sejarah</a></li>
                        <li><a href="{{ route('visi-misi') }}" class="hover:text-[#FFBB00]">Visi Dan Misi</a></li>
                        <li><a href="{{ route('madrasah-aliyah') }}" class="hover:text-[#FFBB00]">Madrasah Aliyah</a>
                        </li>
                        <li>
                            <a href="{{ route('madrasah-tsanawiyah') }}" class="hover:text-[#FFBB00]">Madrasah
                                Tsanawiyah</a>
                        </li>
                        <li><a href="{{ route('foto.index') }}" class="hover:text-[#FFBB00]">Foto</a></li>
                        <li><a href="{{ route('video.index') }}" class="hover:text-[#FFBB00]">Video</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Informasi -->
                <div class="sr-box">
                    <h3 class="text-lg font-bold mb-4 text-white">Informasi</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('berita.index') }}" class="hover:text-[#FFBB00]">Berita Dan Artikel</a>
                        </li>
                        <li><a href="{{ route('pengumuman.index') }}" class="hover:text-[#FFBB00]">Pengumuman</a></li>
                        <li><a href="https://simkes.nurulalami.sch.id/" target="_blank" class="hover:text-[#FFBB00]">SIMKES</a></li>
                        <li><a href="https://shorturl.at/BYi5I" target="_blank" class="hover:text-[#FFBB00]">PPSB</a>
                        </li>
                        <li><a href="{{ route('ikppm-na') }}" class="hover:text-[#FFBB00]">IKPPM-NA</a></li>
                        <li><a href="{{ route('login') }}" class="hover:text-[#FFBB00]">Login</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Google Maps -->
                <div class="sr-box">
                    <h3 class="text-lg font-bold mb-4 text-white">MAPS</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1553712909526!2d106.24944417409652!3d-6.243245061131636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e421957d0a380b9%3A0xbf7026e573629571!2sPondok%20Pesantren%20Modern%20NURUL%20ALAMI!5e0!3m2!1sid!2sid!4v1735892973738!5m2!1sid!2sid"
                        width="100%" height="200" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow"></iframe>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-100 text-[#067344] py-6 text-center font-semibold sr-box">
        ©2025 PUSAKA Nurul Alami (Pusat Sistem dan Akses Komunikasi Pesantren)
    </footer>
    @include('front-end.partials.script')
</body>

</html>
