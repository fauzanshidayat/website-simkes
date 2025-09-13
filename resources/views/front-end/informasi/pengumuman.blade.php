@extends('front-end.layouts.app')

@section('content')
    <!-- Daftar Pengumuman -->
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#F5F5F5]" id="pengumuman">
        <div class="max-w-7xl mx-auto">
            <h2
                class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title">
                Pengumuman
            </h2>

            <!-- Grid Pengumuman -->
            <div class="grid gap-10 md:grid-cols-3">
                @foreach ($pengumuman as $item)
                    <article
                        class="bg-white rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">

                        <!-- Gambar -->
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                                class="w-full object-cover h-48" />
                        @else
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="No Image"
                                class="w-full object-cover h-48" />
                        @endif

                        <div class="p-6 flex flex-col">
                            <!-- Judul -->
                            <h3 class="text-xl font-semibold mb-2 text-[#000000] text-center">
                                {{ $item->judul }}
                            </h3>

                            <!-- Tanggal & Penulis -->
                            <div class="flex flex-wrap justify-center items-center text-sm text-gray-600 mb-3 gap-x-6">
                                <span><i class="fas fa-calendar-alt mr-2 text-[#000000]"></i>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                                </span>
                                <span><i class="fas fa-user mr-2 text-[#000000]"></i> Oleh :
                                    {{ $item->penulis->username ?? '-' }}
                                </span>
                            </div>

                            <!-- Deskripsi -->
                            <p class="text-gray-700 mb-4 text-center line-clamp-3">
                                {{ Str::limit(strip_tags($item->deskripsi), 120, '...') }}
                            </p>

                            <!-- Tombol -->
                            <div class="text-center mt-auto">
                                <a href="{{ route('pengumuman.show', $item->slug) }}"
                                    class="inline-block text-[#000000] hover:text-[#FFBB00] font-semibold">
                                    Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $pengumuman->links('pagination::tailwind') }}
            </div>
        </div>
    </section>
@endsection
