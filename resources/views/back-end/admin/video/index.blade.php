@extends('back-end.layouts.app')

@section('content')
    <section class="grid grid-cols-1 gap-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex justify-start gap-4 p-3">
                <a href="{{ route('admin.video.create') }}"
                    class="px-4 py-2 bg-[#067344] text-white rounded-lg hover:bg-[#056338] transition">
                    Tambah Video
                </a>
            </div>

            @if (session('success'))
                <div class="px-4 py-2 bg-green-100 text-green-800 rounded-lg mx-3 mb-3">
                    {{ session('success') }}
                </div>
            @endif

            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Preview</th>
                        <th class="px-6 py-3">Link</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($videos as $index => $video)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $index + $videos->firstItem() }}</td>
                            <td class="px-6 py-4">
                                <iframe width="200" height="120"
                                    src="{{ str_replace('watch?v=', 'embed/', $video->link_video) }}" frameborder="0"
                                    allowfullscreen></iframe>
                            </td>
                            <td class="px-6 py-4">{{ $video->link_video }}</td>
                            <td class="px-6 py-4 flex gap-2">
                                <!-- Detail -->
                                <a href="{{ route('admin.video.show', $video->id) }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600 text-xs flex items-center gap-1">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Edit -->
                                <a href="{{ route('admin.video.edit', $video->id) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 text-xs flex items-center gap-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Delete -->
                                <form action="{{ route('admin.video.destroy', $video->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus video ini?')" class="inline-block">
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
                            <td colspan="4" class="text-center py-4">Belum ada video.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="p-3">
                {{ $videos->links() }}
            </div>
        </div>
    </section>
@endsection
