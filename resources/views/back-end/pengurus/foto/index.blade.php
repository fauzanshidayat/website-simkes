@extends('back-end.layouts.app')

@section('content')
    <section class="grid grid-cols-1 gap-8">

        <!-- Table Galeri Foto -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <!-- Tombol -->
            <div class="flex justify-start gap-4 p-3">
                <a href="{{ route('pengurus.galeri-foto.create') }}"
                    class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#056338] transition">
                    Tambah Foto
                </a>
            </div>

            @if (session('success'))
                <div class="px-4 py-2 bg-green-100 text-green-800 rounded-lg mx-3 mb-3">
                    {{ session('success') }}
                </div>
            @endif

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Gambar</th>
                        <th scope="col" class="px-6 py-3">Tanggal Upload</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fotos as $index => $foto)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $index + $fotos->firstItem() }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($foto->gambar)
                                    <img src="{{ asset('storage/' . $foto->gambar) }}" alt="Foto"
                                        class="w-16 h-16 rounded-lg object-cover">
                                @else
                                    <span class="text-gray-400 italic">No Image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($foto->created_at)->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <!-- Detail -->
                                <a href="{{ route('pengurus.galeri-foto.show', $foto->id) }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-xs flex items-center gap-1">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Edit -->
                                <a href="{{ route('pengurus.galeri-foto.edit', $foto->id) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 text-xs flex items-center gap-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Hapus -->
                                <form action="{{ route('pengurus.galeri-foto.destroy', $foto->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus foto ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600 text-xs flex items-center gap-1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center px-6 py-4 text-gray-500">
                                Tidak ada data foto
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="p-3">
                {{ $fotos->links() }}
            </div>
        </div>
    </section>
@endsection
