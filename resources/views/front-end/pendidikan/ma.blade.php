@extends('front-end.layouts.app')
@section('content')
    <!-- Sejarah Section -->
    <section class="px-6 md:px-20 py-20 text-[#000000] bg-[#F5F5F5] " id="about">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-16">
            <!-- Kolom Teks -->
            <div
                class="hero-text sr-hidden w-full md:w-1/2 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-4xl font-extrabold mb-6 border-b-4 border-[#FFBB00] text-[#067344] inline-block pb-2">
                    Madrasah Aliyah
                </h2>
                <p class="text-lg leading-relaxed mb-6 text-balance">
                    Setahun setelah berdirinya MTs, tepatnya pada tahun 2004, Pondok Pesantren Modern Nurul Alami mendirikan
                    Madrasah Aliyah (MA) Nurul Alami sebagai kelanjutan pendidikan menengah atas. MA ini bertujuan mencetak
                    generasi yang berwawasan luas, memiliki kompetensi akademik, serta berpegang teguh pada nilai-nilai
                    Islam. <br><br>Dengan berlandaskan visi pondok “berhasil guna sesuai dengan tuntutan agama dan negara,”
                    MA Nurul Alami
                    berkomitmen melahirkan lulusan yang siap melanjutkan ke perguruan tinggi maupun terjun ke masyarakat
                    dengan membawa ilmu, akhlak, dan kemandirian.
                </p>
            </div>
            <!-- Kolom Gambar -->
            <div class="relative hero-img sr-hidden w-full md:w-1/2 flex justify-center items-center">
                <img alt="visi misi" class="rounded-3xl shadow-2xl border-4 border-[#067344] max-w-full h-auto"
                    src="{{ asset('assets/img/ma.jpg') }}" />
            </div>
        </div>
    </section>
@endsection
