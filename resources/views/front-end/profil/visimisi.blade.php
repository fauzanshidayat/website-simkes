@extends('front-end.layouts.app')
@section('content')
    <!-- Sejarah Section -->
    <section class="px-6 md:px-20 py-20 text-[#000000] bg-[#F5F5F5] " id="about">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-center gap-16">
            <!-- Kolom Teks -->
            <div
                class="hero-text sr-hidden w-full md:w-1/2 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <h2 class="text-4xl font-extrabold mb-6 border-b-4 border-[#FFBB00] text-[#067344] inline-block pb-2">
                    Visi Dan Misi
                </h2>
                <p class="text-lg leading-relaxed mb-6">
                    Visi <br>
                    “Berhasil Guna Sesuai Dengan Tuntutan Agama Dan Negara”<br>
                    Misi <br>
                    1. Menciptakan lingkungan sekolah sebagai lingkungan pendidikan
                    dan Pengetahuan yang penuh keimanan dan ketaqwaan. <br>
                    2. Menjalin hubungan baik antara sekolah dengan orang tua murid,
                    Masyarakat luas dan instansi terkait.<br>
                    3. Mendidik santri untuk selalu berbudi pekerti tinggi, berbadan
                    sehat, Berfikir bebas, dan berwawasan luas.<br>
                    4. Menerapkan disiplin siswa dan guru sesuai dengan norma agama,
                    Sosial, dan etika pendidikan.<br>
                    5. Membina dan mengembangkan kreatifitas dan bakat anak didik.
                </p>
            </div>
            <!-- Kolom Gambar -->
            <div class="relative hero-img sr-hidden w-full md:w-1/2 flex justify-center items-center">
                <img alt="visi misi" class="rounded-3xl shadow-2xl border-4 border-[#067344] max-w-full h-auto"
                    src="{{ asset('assets/img/gambar visi misi.jpg') }}" />
            </div>
        </div>
    </section>
@endsection
