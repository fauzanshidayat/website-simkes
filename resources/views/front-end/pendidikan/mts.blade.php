@extends('front-end.layouts.app')
@section('content')
    <!-- Sejarah Section -->
    <section class="px-6 md:px-20 py-20 text-[#000000] bg-[#F5F5F5] " id="about">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-16">
            <!-- Kolom Teks -->
            <div
                class="hero-text w-full md:w-1/2 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-4xl font-extrabold mb-6 border-b-4 border-[#FFBB00] text-[#067344] inline-block pb-2">
                    Madrasah Tsanawiyah
                </h2>
                <p class="text-lg leading-relaxed mb-6 text-balance">
                    Pada tahun 2003, Pondok Pesantren Modern Nurul Alami mendirikan lembaga pendidikan formal tingkat
                    menengah pertama, yaitu Madrasah Tsanawiyah (MTs) Nurul Alami. Kehadirannya dimaksudkan untuk memberikan
                    pendidikan yang terarah sesuai kurikulum nasional, dengan tetap berlandaskan pada nilai-nilai
                    kepesantrenan. <br> <br>MTs Nurul Alami menekankan keseimbangan antara ilmu agama dan ilmu pengetahuan
                    umum,
                    sehingga santri
                    memiliki kecerdasan intelektual sekaligus keteguhan akhlak. MTs ini menjadi tonggak awal perjalanan
                    santri menuju jenjang pendidikan yang lebih tinggi.
                </p>
            </div>
            <!-- Kolom Gambar -->
            <div class="relative hero-img w-full md:w-1/2 flex justify-center items-center">
                <img alt="visi misi" class="rounded-3xl shadow-2xl border-4 border-[#067344] max-w-full h-auto"
                    src="{{ asset('assets/img/mts.jpg') }}" />
            </div>
        </div>
    </section>
@endsection
