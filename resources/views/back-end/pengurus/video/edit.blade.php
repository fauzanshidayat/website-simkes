@extends('back-end.layouts.app')

@section('content')
    <section class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Edit Video</h2>

        <form action="{{ route('pengurus.video.update', $video->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium mb-1">Link YouTube</label>
                <input type="url" name="link_video" value="{{ old('link_video', $video->link_video) }}"
                    class="w-full rounded-lg border-gray-300 focus:ring focus:ring-[#067344] p-2" required>
                @error('link_video')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('pengurus.video.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg">Batal</a>
                <button type="submit" class="px-4 py-2 bg-[#067344] text-white rounded-lg">Update</button>
            </div>
        </form>
    </section>
@endsection
