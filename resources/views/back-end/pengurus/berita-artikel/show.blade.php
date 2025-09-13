@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-4xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Detail Berita</h2>

        <!-- Gambar Berita -->
        <div class="w-full flex justify-center mb-6">
            @if ($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                    class="w-96 h-64 object-cover rounded-lg shadow-md">
            @else
                <img src="{{ asset('assets/img/no-image.png') }}" alt="Default Gambar"
                    class="w-96 h-64 object-cover rounded-lg shadow-md">
            @endif
        </div>

        <!-- Detail -->
        <div class="space-y-4">
            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Judul</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $berita->judul }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Tanggal</h3>
                <p class="text-gray-800 dark:text-gray-100">
                    {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                </p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Deskripsi</h3>
                <div class="prose prose-lg text-gray-800 dark:text-gray-100 text-left max-w-full mt-2 break-words hyphens-auto">
                    {!! $berita->deskripsi !!}
                </div>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Dibuat</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $berita->created_at->format('d M Y H:i') }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Diupdate</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $berita->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('pengurus.berita-artikel.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Kembali</a>
            <a href="{{ route('pengurus.berita-artikel.edit', $berita->id) }}"
                class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Edit</a>
        </div>
    </section>
@endsection
