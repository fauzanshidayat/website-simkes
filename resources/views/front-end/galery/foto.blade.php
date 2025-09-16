@extends('front-end.layouts.app')

@section('content')
    <!-- Gallery Foto -->
    <section class="px-6 md:px-20 py-20 text-[#067344] text-center bg-[#F5F5F5]" id="gallery">
        <h2 class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title sr-hidden">
            Galeri Foto
        </h2>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($galeriFoto as $foto)
                <div class="overflow-hidden rounded-2xl shadow-lg border-4 border-[#067344] cursor-pointer hover:scale-105 transition-transform sr-box sr-hidden h-64">
                    <img src="{{ asset('storage/' . $foto->gambar) }}" alt="Foto Galeri" class="w-full h-full object-cover">
                </div>
            @empty
                <p class="col-span-4 text-gray-500">Belum ada foto di galeri.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $galeriFoto->links() }}
        </div>
    </section>

@endsection
