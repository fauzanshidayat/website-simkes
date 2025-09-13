@extends('front-end.layouts.app')
@section('content')
    <!-- Sejarah Section -->
    <section class="px-6 md:px-20 py-20 text-[#000000] bg-[#F5F5F5] " id="about">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-16">
            <!-- Kolom Teks -->
            <div
                class="hero-text w-full md:w-1/2 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-4xl font-extrabold mb-6 border-b-4 border-[#FFBB00] text-[#067344] inline-block pb-2">
                    Sejarah Pondok
                </h2>
                <p class="text-lg leading-relaxed mb-6 text-balance">
                    Pondok Pesantren Modern Nurul Alami resmi berdiri pada tanggal 26 Maret 1999 atas prakarsa dan bimbingan
                    Kyai Amung Permana Yusup, S.Pd.I. Kehadirannya dilatarbelakangi oleh keinginan luhur untuk menghadirkan
                    lembaga pendidikan Islam yang mampu memadukan tradisi kepesantrenan dengan sistem pendidikan modern.
                    <br> <br>Sejak awal, Pondok Pesantren Modern Nurul Alami memiliki visi “berhasil guna sesuai dengan
                    tuntutan
                    agama dan negara.” Visi ini menjadi landasan utama dalam setiap langkah pembinaan, agar santri tidak
                    hanya menguasai ilmu agama, tetapi juga memiliki kecakapan hidup yang relevan dengan kebutuhan bangsa.
                    <br> <br>Dengan berbekal keikhlasan, kerja keras, dan dukungan masyarakat, pondok ini berkembang menjadi
                    wadah
                    pembinaan generasi Islam yang berilmu, berakhlak mulia, disiplin, serta mandiri. Selama perjalanannya,
                    Pondok Pesantren Modern Nurul Alami terus berupaya melahirkan insan-insan yang siap menghadapi tantangan
                    zaman tanpa meninggalkan jati diri Islami, serta bermanfaat bagi agama, bangsa, dan negara.
                </p>
            </div>
            <!-- Kolom Gambar -->
            <div class="relative hero-img w-full md:w-1/2 flex justify-center items-center">
                <img alt="visi misi" class="rounded-3xl shadow-2xl border-4 border-[#067344] max-w-full h-auto"
                    src="{{ asset('assets/img/profile.jpg') }}" />
            </div>
        </div>
    </section>
@endsection
