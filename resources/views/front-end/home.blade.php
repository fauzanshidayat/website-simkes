@extends('front-end.layouts.app')
@section('content')
    <!-- Hero Section -->
    <section class="relative px-6 md:px-20 py-20 bg-[#F5F5F5]" id="home">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-8 items-center">
            <!-- Kolom Teks -->
            <div class="text-center md:text-left space-y-6 hero-text sr-hidden">
                <h3 class="text-3xl md:text-2xl font-extrabold tracking-tight leading-tight text-[#067344]">
                    Selamat Datang Di Website
                </h3>
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-[#067344]">
                    Pondok Pesantren
                    <br />
                    <span class="text-[#FFBB00]" id="element"> </span>
                </h1>
                <p class="text-lg md:text-xl text-green-700 italic">
                    "Berhasil Guna Sesuai Dengan Tuntutan Agama Dan Negara"
                </p>
                <div class="mt-12">
                    <a href="https://shorturl.at/BYi5I" target="_blank"
                        class="inline-block px-6 py-3 bg-[#FFBB00] text-[#067344] font-semibold rounded-full hover:bg-yellow-500 transition sr-box">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <!-- Kolom Carousel -->
            <div id="default-carousel" class="relative w-full hero-img sr-hidden" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/gambar 1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/gambar 2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/gambar 3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('assets/img/gambar 4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="px-6 md:px-20 py-20 text-[#000000] bg-[#FFFFFF] " id="about">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="about-text sr-hidden">
                <h2 class="text-4xl font-extrabold mb-6 border-b-4 border-[#FFBB00] text-[#067344] inline-block pb-2">
                    Sambutan <br />Pimpinan Pondok
                </h2>
                <p class="text-lg leading-relaxed mb-6">
                    Assalamualaikum wr.wb<br /><br />
                    Puji dan syukur kami panjatkan ke hadirat Allah SWT, atas rahmat
                    dan karunia-Nya, sehingga kami dapat meluncurkan situs resmi
                    Pondok Pesantren Modern Nurul Alami ini. Situs ini kami hadirkan
                    sebagai media untuk memperkenalkan sekaligus mempublikasikan
                    kegiatan serta visi misi pesantren kepada seluruh masyarakat
                    luas.<br /><br />
                    Dengan hadirnya situs ini, kami berharap para santri, orang tua,
                    serta seluruh stakeholders dapat dengan mudah mengakses informasi
                    terkini mengenai pembelajaran, program pengembangan, dan berbagai
                    aktivitas pesantren secara cepat, efisien, dan online selama 24
                    jam.<br /><br />
                    Semoga kehadiran situs ini membawa manfaat positif dan menjadi
                    sarana yang mendukung kemajuan serta kredibilitas Pondok Pesantren
                    Modern Nurul Alami. Terima kasih atas kunjungan dan dukungan semua
                    pihak.<br /><br />
                    Wassalamu`alaikum Wr.Wb.<br /><br />
                    Pimpinan Pesantren,<br />
                    K. Amung Permana Yusup, S.Pd.I
                </p>
            </div>
            <div class="relative about-img sr-hidden">
                <img alt="Students studying Quran with modern devices in futuristic classroom with neon lighting"
                    class="rounded-3xl shadow-2xl border-4 border-[#067344] w-[600px] h-[600px]"
                    src="{{ asset('assets/img/ayah.png') }}" />
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="px-6 md:px-20 py-20 bg-[#F5F5F5] text-[#067344] text-center" id="programs">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Program Unggulan
        </h2>

        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-3 px-4">
            <!-- Box 1 -->
            <div class="group bg-[#067344] rounded-3xl p-8 shadow-lg transition transform hover:scale-105 sr-box sr-hidden">
                <div class="flex items-center justify-center mb-6 text-white">
                    <i class="fas fa-book-reader fa-3x"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 text-center text-white">
                    Kurikulum Qur'ani
                </h3>
                <p class="text-center text-white">
                    Penekanan pada Al-Qur'an, hadits, dan ilmu agama.
                </p>
            </div>

            <!-- Box 2 -->
            <div class="group bg-[#067344] rounded-3xl p-8 shadow-lg transition transform hover:scale-105 sr-box sr-hidden">
                <div class="flex items-center justify-center mb-6 text-white">
                    <i class="fas fa-lightbulb fa-3x"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 text-center text-white">
                    Kurikulum Inovatif
                </h3>
                <p class="text-center text-white">
                    Integrasi antara pendidikan agama dan pengetahuan umum secara
                    kreatif.
                </p>
            </div>

            <!-- Box 3 -->
            <div class="group bg-[#067344] rounded-3xl p-8 shadow-lg transition transform hover:scale-105 sr-box sr-hidden">
                <div class="flex items-center justify-center mb-6 text-white">
                    <i class="fas fa-globe fa-3x"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4 text-center text-white">
                    Pengembangan Karakter
                </h3>
                <p class="text-center text-white">
                    Pembinaan akhlak, kepemimpinan, dan wawasan global.
                </p>
            </div>
        </div>
    </section>

   <!-- Berita Section -->
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#FFFFFF]" id="news">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Berita Dan Artikel Terbaru
        </h2>

        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-3">
            @forelse ($beritaTerbaru as $berita)
                <article
                    class="bg-[#FFFFFF] rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition sr-box sr-hidden">
                    <!-- Gambar -->
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                            class="w-full object-cover h-48">
                    @else
                        <img src="{{ asset('assets/img/no-image.png') }}" alt="Default"
                            class="w-full object-cover h-48">
                    @endif

                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-[#000000] text-center">
                            {{ $berita->judul }}
                        </h3>

                        <!-- Tanggal & Penulis -->
                        <div
                            class="flex flex-wrap justify-center items-center text-sm text-[#000000] mb-3 gap-x-6 gap-y-2">
                            <span class="flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-user mr-2"></i>
                                Oleh : {{ $berita->penulis->username ?? 'Admin' }}
                            </span>
                        </div>

                        <p class="text-[#000000] mb-4 text-center">
                            {{ \Illuminate\Support\Str::limit(strip_tags($berita->deskripsi), 100, '...') }}
                        </p>

                        <div class="text-center">
                            <a class="text-[#000000] hover:text-[#FFBB00] font-semibold inline-flex items-center"
                                href="{{ route('berita.show', $berita->slug) }}">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center text-gray-500 italic">
                    Belum ada berita.
                </div>
            @endforelse
        </div>

        <!-- Tombol Berita Lainnya -->
        <div class="mt-12 text-center">
            <a href="{{ route('berita.index') }}"
                class="inline-block px-6 py-3 bg-[#FFBB00] text-[#067344] font-semibold rounded-full hover:bg-yellow-500 transition sr-box sr-hidden">
                Berita Lainnya
            </a>
        </div>
    </section>

    <!-- Pengumuman Section -->
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#F5F5F5]" id="pengumuman">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Pengumuman Terbaru
        </h2>

        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-3">
            @forelse ($pengumumanTerbaru as $item)
                <article
                    class="bg-[#FFFFFF] rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition sr-box sr-hidden">

                    <!-- Gambar -->
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full object-cover h-48" />
                    @else
                        <img src="{{ asset('assets/img/no-image.png') }}" alt="No Image"
                            class="w-full object-cover h-48" />
                    @endif

                    <div class="p-6">
                        <!-- Judul -->
                        <h3 class="text-xl font-semibold mb-2 text-[#000000] text-center">
                            {{ $item->judul }}
                        </h3>

                        <!-- Tanggal & Penulis -->
                        <div
                            class="flex flex-wrap justify-center items-center text-sm text-[#000000] mb-3 gap-x-6 gap-y-2">
                            <span class="flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-user mr-2"></i> Oleh : {{ $item->penulis->username ?? '-' }}
                            </span>
                        </div>

                        <!-- Deskripsi singkat -->
                        <p class="text-[#000000] mb-4 text-center line-clamp-3">
                            {{ Str::limit(strip_tags($item->deskripsi), 100, '...') }}
                        </p>

                        <!-- Tombol Detail -->
                        <div class="text-center">
                            <a class="text-[#000000] hover:text-[#FFBB00] font-semibold inline-flex items-center"
                                href="{{ route('pengumuman.show', $item->slug) }}">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-3 text-center text-gray-500 italic">
                    Belum ada pengumuman.
                </div>
            @endforelse
        </div>

        <!-- Tombol Pengumuman Lainnya -->
        <div class="mt-12 text-center">
            <a href="{{ route('pengumuman.index') }}"
                class="inline-block px-6 py-3 bg-[#FFBB00] text-[#067344] font-semibold rounded-full hover:bg-yellow-500 transition sr-box sr-hidden">
                Pengumuman Lainnya
            </a>
        </div>
    </section>

    <!-- Gallery Foto -->
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#FFFFFF]" id="gallery">
        <h2 class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Galeri Foto
        </h2>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($galeriFoto as $foto)
                <div class="overflow-hidden rounded-2xl shadow-lg border-4 border-[#067344] cursor-pointer hover:scale-105 transition-transform sr-box sr-hidden" style="height: 300px;">
                    <img src="{{ asset('storage/' . $foto->gambar) }}" alt="Foto Galeri"
                        class="w-full h-full object-cover">
                </div>
            @empty
                <p class="col-span-4 text-gray-500">Belum ada foto di galeri.</p>
            @endforelse
        </div>

        <!-- Tombol Foto Lainnya -->
        <div class="mt-12 text-center">
            <a href="{{ route('foto.index') }}"
            class="inline-block px-6 py-3 bg-[#FFBB00] text-[#067344] font-semibold rounded-full hover:bg-yellow-500 transition sr-box sr-hidden">
                Foto Lainnya
            </a>
        </div>
    </section>

    <!-- Gallery Video -->
    <section class="px-6 md:px-20 py-20 bg-[#F5F5F5] text-[#067344] text-center" id="video-gallery">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Galeri Video
        </h2>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($galeriVideo as $video)
                <div
                    class="relative w-full aspect-[3/2] min-h-[280px] rounded-2xl shadow-lg border-4 border-[#067344] overflow-hidden hover:scale-105 transition-transform cursor-pointer sr-box sr-hidden">
                    <iframe src="{{ str_replace('watch?v=', 'embed/', $video->link_video) }}" title="Video Galeri"
                        class="absolute inset-0 w-full h-full" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            @empty
                <p class="col-span-4 text-gray-600">Belum ada video tersedia.</p>
            @endforelse
        </div>

        <!-- Tombol Video Lainnya -->
        <div class="mt-12 text-center">
            <a href="{{ route('video.index') }}"
                class="inline-block px-6 py-3 bg-[#FFBB00] text-[#067344] font-semibold rounded-full hover:bg-yellow-500 transition sr-box sr-hidden">
                Video Lainnya
            </a>
        </div>
    </section>
@endsection
