@extends('front-end.layouts.app')

@section('title', $pengumuman->judul)
@section('description', Str::limit(strip_tags($pengumuman->deskripsi), 150))
@section('og_title', $pengumuman->judul)
@section('og_description', Str::limit(strip_tags($pengumuman->deskripsi), 150))
@section('og_image', $pengumuman->gambar ? asset('storage/' . $pengumuman->gambar) : asset('assets/img/no-image.png'))

@section('content')
<section class="px-6 md:px-20 py-20 bg-[#F5F5F5] text-[#000000]" id="detail-pengumuman">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- Kolom Kiri: Detail Pengumuman -->
        <div class="md:col-span-2 bg-white rounded-3xl shadow-2xl p-10 flex flex-col items-center gap-8 hero-text">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center">{{ $pengumuman->judul }}</h1>
            <h3 class="text-gray-500 font-semibold text-center">
                <i class="fas fa-calendar-alt mr-2"></i>
                {{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}
                <span class="mx-2">|</span>
                <i class="fas fa-user mr-2"></i> Penulis: {{ $pengumuman->penulis->username ?? '-' }}
            </h3>

            <div class="flex flex-col items-center w-full">
                <style>
                    .detail-pengumuman-image {
                        width: 100%;
                        max-width: 600px;
                        height: 400px; 
                        overflow: hidden;
                        border-radius: 1rem;
                        box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
                        margin: 0 auto;
                    }
                    .detail-pengumuman-image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        display: block;
                    }
                </style>

                @if ($pengumuman->gambar)
                <div class="detail-pengumuman-image">
                    <img src="{{ asset('storage/' . $pengumuman->gambar) }}" alt="{{ $pengumuman->judul }}">
                </div>
                @endif

                <div class="prose prose-lg text-gray-700 text-left max-w-[600px] w-full mt-6 leading-relaxed break-words hyphens-auto">
                    {!! $pengumuman->deskripsi !!}
                </div>
            </div>

            <div class="mt-8 w-full flex justify-center">
                <a href="{{ route('pengumuman.index') }}" class="inline-block bg-[#FFBB00] text-black px-6 py-3 rounded-full font-semibold hover:bg-[#067344] hover:text-white transition-colors duration-300">
                    &larr; Kembali ke Pengumuman
                </a>
            </div>
        </div>

        <!-- Kolom Kanan: Pengumuman Lainnya -->
        <aside class="space-y-6 hero-img">
            <h2 class="text-xl font-bold text-[#000000] mb-4">Pengumuman Lainnya</h2>
            @forelse ($pengumumanLain as $item)
            <a href="{{ route('pengumuman.show', $item->slug) }}" class="flex items-start gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md transition group">
                @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-28 h-20 object-cover rounded-lg">
                @else
                    <img src="{{ asset('assets/img/no-image.png') }}" alt="No Image" class="w-28 h-20 object-cover rounded-lg">
                @endif
                <div class="flex flex-col">
                    <h3 class="text-md font-semibold text-gray-800 mb-1 group-hover:text-[#067344]">{{ $item->judul }}</h3>
                    <div class="text-sm text-gray-500 flex flex-col mb-2">
                        <span><i class="fas fa-user mr-2 text-[#067344]"></i> {{ $item->penulis->username ?? '-' }}</span>
                        <span><i class="fas fa-calendar-alt mr-2 text-[#067344]"></i> {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit(strip_tags($item->deskripsi), 80, '...') }}</p>
                </div>
            </a>
            @empty
                <p class="text-gray-500">Belum ada pengumuman lainnya.</p>
            @endforelse
        </aside>
    </div>
</section>
@endsection

