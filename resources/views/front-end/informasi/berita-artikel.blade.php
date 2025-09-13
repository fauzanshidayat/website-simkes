@extends('front-end.layouts.app')

@section('content')
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#F5F5F5]" id="news">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title">
            Berita Dan Artikel
        </h2>

        <div class="max-w-7xl mx-auto grid gap-12 md:grid-cols-3">
            @forelse ($berita as $item)
                <article
                    class="bg-[#FFFFFF] rounded-3xl shadow-lg overflow-hidden transform hover:scale-105 transition sr-box">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}"
                            class="w-full object-cover h-48" height="250" width="400" />
                    @else
                        <img src="{{ asset('assets/img/no-image.png') }}" alt="default" class="w-full object-cover h-48"
                            height="250" width="400" />
                    @endif

                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-[#000000] text-center">
                            {{ $item->judul }}
                        </h3>

                        <!-- Tanggal & Penulis di Tengah -->
                        <div class="flex flex-wrap justify-center items-center text-sm text-[#000000] mb-3 gap-x-6 gap-y-2">
                            <span class="flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-user mr-2"></i> Oleh : {{ $item->penulis->username ?? 'Admin' }}
                            </span>
                        </div>

                        <p class="text-[#000000] mb-4 text-center">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 120, '...') }}
                        </p>

                        <div class="text-center">
                            <a href="{{ route('berita.show', $item->slug) }}"
                                class="text-[#000000] hover:text-[#FFBB00] font-semibold inline-flex items-center">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <p class="col-span-3 text-gray-500">Belum ada berita.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12 text-center">
            {{ $berita->links() }}
        </div>
    </section>
@endsection
