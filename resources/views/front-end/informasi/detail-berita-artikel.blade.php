@extends('front-end.layouts.app')

@section('title', $berita->judul)
@section('description', Str::limit(strip_tags($berita->deskripsi), 150))
@section('og_title', $berita->judul)
@section('og_description', Str::limit(strip_tags($berita->deskripsi), 150))
@section('og_image', $berita->gambar ? asset('storage/' . $berita->gambar) : asset('assets/img/no-image.png'))

@section('content')
<section class="px-6 md:px-20 py-20 bg-[#F5F5F5] text-[#000000]" id="detail-berita">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Kolom Kiri (Detail Berita) -->
        <div class="md:col-span-2 bg-white rounded-3xl shadow-2xl p-10 flex flex-col items-center gap-8 hero-text">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center">{{ $berita->judul }}</h1>
            <h3 class="text-gray-500 font-semibold text-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
                <span class="mx-2">|</span>
                <i class="fas fa-user mr-2"></i> Penulis: {{ $berita->penulis->name ?? 'Admin' }}
            </h3>
            <div class="flex flex-col items-center w-full">
                <style>
                    /* Container gambar */
                    .detail-berita-image {
                        width: 100%;
                        max-width: 600px;   /* maksimal lebar */
                        height: 400px;      /* tinggi tetap */
                        overflow: hidden;   /* potong bagian gambar yang keluar */
                        border-radius: 1rem; /* rounded-2xl */
                        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05); /* shadow-md */
                        margin: 0 auto;     /* center */
                    }

                    .detail-berita-image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;   /* gambar tetap proporsional dan menutupi area */
                        display: block;
                    }
                </style>

                <div class="detail-berita-image">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    @else
                        <img src="{{ asset('assets/img/no-image.png') }}" alt="default">
                    @endif
                </div>

                 <!-- Isi Berita -->
                <div class="prose prose-lg text-gray-700 text-left max-w-[600px] w-full mt-6 leading-relaxed break-words hyphens-auto">
                    {!! $berita->deskripsi !!}
                </div>
            </div>
            <div class="mt-8 w-full flex justify-center">
                <a href="{{ route('berita.index') }}" class="inline-block bg-[#FFBB00] text-black px-6 py-3 rounded-full font-semibold hover:bg-[#067344] hover:text-white transition-colors duration-300">
                    &larr; Kembali ke Berita
                </a>
            </div>
        </div>

        <!-- Kolom Kanan (List Berita Lain) -->
        <aside class="space-y-6 hero-img">
            <h2 class="text-xl font-bold text-[#000000] mb-4">Berita Lainnya</h2>
            @forelse ($beritaLain as $item)
            <a href="{{ route('berita.show', $item->slug) }}" class="flex items-start gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md transition group">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-28 h-20 object-cover rounded-lg">
                @else
                    <img src="{{ asset('assets/img/no-image.png') }}" alt="default" class="w-28 h-20 object-cover rounded-lg">
                @endif
                <div class="flex flex-col">
                    <h3 class="text-md font-semibold text-gray-800 mb-1 group-hover:text-[#067344]">{{ \Illuminate\Support\Str::limit($item->judul, 40) }}</h3>
                    <div class="text-sm text-gray-500 flex flex-col mb-2">
                        <span><i class="fas fa-user mr-2 text-[#067344]"></i> {{ $item->penulis->name ?? 'Admin' }}</span>
                        <span><i class="fas fa-calendar-alt mr-2 text-[#067344]"></i> {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-2">{{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 80, '...') }}</p>
                </div>
            </a>
            @empty
                <p class="text-gray-500">Belum ada berita lainnya.</p>
            @endforelse
        </aside>
    </div>
</section>
@endsection

