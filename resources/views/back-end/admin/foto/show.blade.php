@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-3xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Detail Foto</h2>

        <!-- Gambar Galeri -->
        <div class="w-full flex justify-center mb-6">
            <div
                class="w-[500px] h-[350px] rounded-lg overflow-hidden shadow-md bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                @if ($galeri->gambar)
                    <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="Foto Galeri" class="object-cover w-full h-full">
                @else
                    <img src="{{ asset('assets/img/no-image.png') }}" alt="Default Foto" class="object-cover w-full h-full">
                @endif
            </div>
        </div>

        <!-- Detail Foto -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Dibuat</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $galeri->created_at->format('d M Y H:i') }}</p>
            </div>

            <div>
                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Diupdate</h3>
                <p class="text-gray-800 dark:text-gray-100">{{ $galeri->updated_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end gap-4 mt-8">
            <a href="{{ route('admin.galeri-foto.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Kembali</a>
            <a href="{{ route('admin.galeri-foto.edit', $galeri->id) }}"
                class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Edit</a>
        </div>
    </section>
@endsection
