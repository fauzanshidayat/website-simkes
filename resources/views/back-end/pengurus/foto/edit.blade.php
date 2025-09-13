@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-3xl mx-auto bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Edit Foto</h2>

        <form action="{{ route('pengurus.galeri-foto.update', $foto->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Gambar -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Gambar</label>
                <div class="flex items-start gap-4">
                    <!-- Preview Lama -->
                    <div
                        class="w-40 h-28 flex items-center justify-center border rounded-lg overflow-hidden bg-gray-50 dark:bg-gray-800">
                        @if ($foto->gambar)
                            <img id="preview" src="{{ asset('storage/' . $foto->gambar) }}" alt="Gambar Lama"
                                class="object-cover w-full h-full">
                        @else
                            <img id="preview" src="{{ asset('assets/img/no-image.png') }}" alt="Default Gambar"
                                class="object-cover w-full h-full">
                        @endif
                    </div>
                    <!-- Input File -->
                    <div class="flex-1">
                        <input type="file" name="gambar" id="gambarInput"
                            class="text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:py-2 file:px-4
                               file:rounded-lg file:border-0 file:text-sm file:font-semibold
                               file:bg-blue-600 file:text-white hover:file:bg-blue-700">
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Upload gambar baru untuk mengganti.</p>
                    </div>
                </div>
                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('pengurus.galeri-foto.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#055836]">Update</button>
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
