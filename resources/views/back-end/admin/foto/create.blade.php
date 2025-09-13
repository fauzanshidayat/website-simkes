@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-3xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Tambah Foto</h2>

        <form action="{{ route('admin.galeri-foto.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Upload Gambar -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Upload Gambar</label>
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
                       file:bg-[#067344] file:text-white hover:file:bg-[#055836]"
                        required>
                </div>
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.galeri-foto.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Simpan</button>
            </div>
        </form>
    </section>

    <!-- Script Preview Gambar -->
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
