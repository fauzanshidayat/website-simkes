@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md text-center">
        <h2 class="text-2xl font-semibold mb-6">Detail Video</h2>

        <!-- Wrapper agar video responsif -->
        <div class="mb-6 flex justify-center">
            <div class="w-full max-w-3xl aspect-video">
                <iframe src="{{ str_replace('watch?v=', 'embed/', $video->link_video) }}"
                    class="w-full h-full rounded-lg shadow-md" frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </div>

        <p class="mb-4 text-gray-700">
            Link Video:
            <a href="{{ $video->link_video }}" target="_blank" class="text-blue-600 underline">
                {{ $video->link_video }}
            </a>
        </p>

        <div class="flex justify-end gap-4">
            <a href="{{ route('pengurus.video.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg">Kembali</a>
            <a href="{{ route('pengurus.video.edit', $video->id) }}"
                class="px-4 py-2 bg-[#067344] text-white rounded-lg">Edit</a>
        </div>
    </section>
@endsection
