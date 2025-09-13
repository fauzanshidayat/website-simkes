@extends('front-end.layouts.app')

@section('content')
    <!-- Gallery Video -->
    <section class="px-6 md:px-20 py-20 bg-[#F5F5F5] text-[#067344] text-center" id="video-gallery">
        <h2
            class="text-4xl font-extrabold mb-12 text-center border-b-4 border-[#FFBB00] inline-block pb-2 mx-auto max-w-max sr-title">
            Galeri Video
        </h2>

        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($videos as $video)
                <div
                    class="relative w-full aspect-[3/2] min-h-[280px] rounded-2xl shadow-lg border-4 border-[#067344] overflow-hidden hover:scale-105 transition-transform cursor-pointer sr-box">
                    <iframe src="{{ str_replace('watch?v=', 'embed/', $video->link_video) }}" title="Galeri Video"
                        class="absolute inset-0 w-full h-full" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            @empty
                <p class="col-span-4 text-gray-600">Belum ada video tersedia.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $videos->links() }}
        </div>
    </section>
@endsection
