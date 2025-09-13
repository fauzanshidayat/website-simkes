@extends('back-end.layouts.app')

@section('content')
<section class="max-w-4xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Tambah Berita / Artikel</h2>

    <form action="{{ route('admin.berita-artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Judul -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}"
                class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white 
                focus:ring focus:ring-[#067344] p-2"
                placeholder="Masukkan judul berita..." required>
            @error('judul')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Gambar -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Gambar</label>
            <div class="flex items-center gap-4">
                <div
                    class="w-40 h-28 flex items-center justify-center border-2 border-dashed rounded-lg overflow-hidden 
                    bg-gray-50 dark:bg-gray-800">
                    <img id="preview" src="{{ asset('assets/img/no-image.png') }}" alt="Preview"
                        class="object-cover w-full h-full">
                </div>
                <input type="file" name="gambar" id="gambarInput"
                    class="text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4
                    file:rounded-lg file:border-0 file:text-sm file:font-semibold
                    file:bg-[#067344] file:text-white hover:file:bg-[#055836]">
            </div>
            @error('gambar')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tanggal -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}"
                class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white 
                focus:ring focus:ring-[#067344] p-2" required>
            @error('tanggal')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Deskripsi dengan Trix -->
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Deskripsi</label>
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
            <trix-editor input="deskripsi" class="bg-white dark:bg-gray-800 rounded-lg shadow-sm w-full"></trix-editor>
            @error('deskripsi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.berita-artikel.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Batal</a>
            <button type="submit"
                class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Simpan</button>
        </div>
    </form>
</section>

<script>
    document.getElementById('gambarInput').addEventListener('change', function(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    });
</script>
@endsection

